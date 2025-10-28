<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Initialize Twig
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader, [
    'cache' => false, 
    'debug' => true,
]);

// Helper function to check authentication
function isAuthenticated() {
    return isset($_SESSION['user']);
}

// Helper function to get tickets
function getTickets() {
    return isset($_SESSION['tickets']) ? $_SESSION['tickets'] : [];
}

// Helper function to save tickets
function saveTickets($tickets) {
    $_SESSION['tickets'] = $tickets;
}

// Routing
$page = $_GET['page'] ?? 'landing';
$action = $_GET['action'] ?? '';

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($action === 'login') {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        
        // Basic validation (in production, verify against database)
        if (!empty($email) && !empty($password) && strlen($password) >= 6) {
            $_SESSION['user'] = [
                'email' => $email,
                'name' => $email
            ];
            $_SESSION['message'] = ['type' => 'success', 'text' => 'Login successful!'];
            header('Location: index.php?page=dashboard');
            exit;
        } else {
            $_SESSION['message'] = ['type' => 'error', 'text' => 'Invalid credentials'];
        }
    }
    
    if ($action === 'signup') {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        
        if (!empty($name) && !empty($email) && !empty($password) && strlen($password) >= 6) {
            $_SESSION['user'] = [
                'email' => $email,
                'name' => $name
            ];
            $_SESSION['message'] = ['type' => 'success', 'text' => 'Signup successful!'];
            header('Location: index.php?page=dashboard');
            exit;
        } else {
            $_SESSION['message'] = ['type' => 'error', 'text' => 'Please fill all fields correctly'];
        }
    }
    
    if ($action === 'logout') {
        session_destroy();
        header('Location: index.php?page=login');
        exit;
    }
    
    if ($action === 'create_ticket') {
        if (!isAuthenticated()) {
            header('Location: index.php?page=login');
            exit;
        }
        
        $title = $_POST['title'] ?? '';
        $description = $_POST['description'] ?? '';
        $status = $_POST['status'] ?? 'open';
        $priority = $_POST['priority'] ?? 'medium';
        
        if (!empty($title)) {
            $tickets = getTickets();
            $tickets[] = [
                'id' => time() . rand(1000, 9999),
                'title' => $title,
                'description' => $description,
                'status' => $status,
                'priority' => $priority
            ];
            saveTickets($tickets);
            $_SESSION['message'] = ['type' => 'success', 'text' => 'Ticket created successfully!'];
        } else {
            $_SESSION['message'] = ['type' => 'error', 'text' => 'Title is required'];
        }
        
        header('Location: index.php?page=tickets');
        exit;
    }
    
    if ($action === 'update_ticket') {
        if (!isAuthenticated()) {
            header('Location: index.php?page=login');
            exit;
        }
        
        $id = $_POST['id'] ?? '';
        $title = $_POST['title'] ?? '';
        $description = $_POST['description'] ?? '';
        $status = $_POST['status'] ?? 'open';
        $priority = $_POST['priority'] ?? 'medium';
        
        if (!empty($id) && !empty($title)) {
            $tickets = getTickets();
            foreach ($tickets as &$ticket) {
                if ($ticket['id'] == $id) {
                    $ticket['title'] = $title;
                    $ticket['description'] = $description;
                    $ticket['status'] = $status;
                    $ticket['priority'] = $priority;
                    break;
                }
            }
            saveTickets($tickets);
            $_SESSION['message'] = ['type' => 'success', 'text' => 'Ticket updated successfully!'];
        }
        
        header('Location: index.php?page=tickets');
        exit;
    }
    
    if ($action === 'delete_ticket') {
        if (!isAuthenticated()) {
            header('Location: index.php?page=login');
            exit;
        }
        
        $id = $_POST['id'] ?? '';
        
        if (!empty($id)) {
            $tickets = getTickets();
            $tickets = array_filter($tickets, function($ticket) use ($id) {
                return $ticket['id'] != $id;
            });
            saveTickets(array_values($tickets));
            $_SESSION['message'] = ['type' => 'success', 'text' => 'Ticket deleted successfully!'];
        }
        
        header('Location: index.php?page=tickets');
        exit;
    }
}

// Handle GET pages
if (($page === 'dashboard' || $page === 'tickets') && !isAuthenticated()) {
    header('Location: index.php?page=login');
    exit;
}

// Get message and clear it
$message = $_SESSION['message'] ?? null;
unset($_SESSION['message']);

// Prepare data for templates
$data = [
    'user' => $_SESSION['user'] ?? null,
    'message' => $message,
    'page' => $page
];

// Render appropriate template
switch ($page) {
    case 'landing':
        echo $twig->render('landing.twig', $data);
        break;
    case 'login':
        echo $twig->render('auth.twig', array_merge($data, ['mode' => 'login']));
        break;
    case 'signup':
        echo $twig->render('auth.twig', array_merge($data, ['mode' => 'signup']));
        break;
    case 'dashboard':
        $tickets = getTickets();
        $stats = [
            'total' => count($tickets),
            'open' => count(array_filter($tickets, fn($t) => $t['status'] === 'open')),
            'in_progress' => count(array_filter($tickets, fn($t) => $t['status'] === 'in_progress')),
            'closed' => count(array_filter($tickets, fn($t) => $t['status'] === 'closed'))
        ];
        echo $twig->render('dashboard.twig', array_merge($data, ['stats' => $stats]));
        break;
    case 'tickets':
        $tickets = getTickets();
        $editId = $_GET['edit'] ?? null;
        $editTicket = null;
        if ($editId) {
            foreach ($tickets as $ticket) {
                if ($ticket['id'] == $editId) {
                    $editTicket = $ticket;
                    break;
                }
            }
        }
        echo $twig->render('tickets.twig', array_merge($data, [
            'tickets' => $tickets,
            'editTicket' => $editTicket,
            'showForm' => isset($_GET['new']) || $editId
        ]));
        break;
    default:
        echo $twig->render('landing.twig', $data);
}