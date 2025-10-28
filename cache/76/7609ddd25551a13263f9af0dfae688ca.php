<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* auth_page.html.twig */
class __TwigTemplate_692ace612883120471fd4f2c805da03d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>";
        // line 6
        yield (((($context["mode"] ?? null) == "login")) ? ("Login - TicketFlow") : ("Sign Up - TicketFlow"));
        yield "</title>
  <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<body class=\"bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen\">
  <div class=\"min-h-screen flex items-center justify-center px-4 py-12\">
    <div class=\"max-w-md w-full bg-white rounded-2xl shadow-xl p-8\">

    ";
        // line 13
        if ((array_key_exists("toast", $context) && ($context["toast"] ?? null))) {
            // line 14
            yield "        ";
            yield from $this->load("Toast.html.twig", 14)->unwrap()->yield(CoreExtension::merge($context, ["message" => CoreExtension::getAttribute($this->env, $this->source,             // line 15
($context["toast"] ?? null), "message", [], "any", false, false, false, 15), "type" => CoreExtension::getAttribute($this->env, $this->source,             // line 16
($context["toast"] ?? null), "type", [], "any", false, false, false, 16)]));
            // line 18
            yield "    ";
        }
        // line 19
        yield "      
      <!-- Logo -->
      <div class=\"text-center mb-8\">
        <a href=\"index.php\" class=\"inline-flex items-center gap-2 mb-6\">
          <div class=\"bg-gradient-to-br from-blue-600 to-purple-600 p-2 rounded-lg\">
            <svg class=\"w-8 h-8 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                d=\"M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z\" />
            </svg>
          </div>
          <span class=\"text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent\">
            TicketFlow
          </span>
        </a>

        <h1 class=\"text-3xl font-bold text-gray-800 mb-2\">
          ";
        // line 35
        if ((($context["mode"] ?? null) == "login")) {
            // line 36
            yield "            Welcome Back
          ";
        } else {
            // line 38
            yield "            Create Account
          ";
        }
        // line 40
        yield "        </h1>
        <p class=\"text-gray-600\">
          ";
        // line 42
        if ((($context["mode"] ?? null) == "login")) {
            // line 43
            yield "            Sign in to your account
          ";
        } else {
            // line 45
            yield "            Sign up to get started
          ";
        }
        // line 47
        yield "        </p>
      </div>

      <!-- Toast Message (optional) -->
      ";
        // line 51
        if ((($tmp = ($context["toast"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "      <div class=\"mb-6 p-4 rounded-lg ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["toast"] ?? null), "type", [], "any", false, false, false, 52) == "success")) {
                yield " bg-green-50 border border-green-200 ";
            } else {
                yield " bg-red-50 border border-red-200 ";
            }
            yield "\">
        <p class=\"";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["toast"] ?? null), "type", [], "any", false, false, false, 53) == "success")) {
                yield " text-green-700 ";
            } else {
                yield " text-red-700 ";
            }
            yield " text-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["toast"] ?? null), "message", [], "any", false, false, false, 53), "html", null, true);
            yield "</p>
      </div>
      ";
        }
        // line 56
        yield "
      <!-- Auth Form -->
      <form action=\"auth-handler.php\" method=\"POST\" class=\"space-y-5\">
        <input type=\"hidden\" name=\"action\" value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mode"] ?? null), "html", null, true);
        yield "\">

        ";
        // line 61
        if ((($context["mode"] ?? null) == "signup")) {
            // line 62
            yield "        <!-- Name Field -->
        <div>
          <label for=\"name\" class=\"block text-sm font-medium text-gray-700 mb-2\">
            Full Name
          </label>
          <input
            type=\"text\"
            id=\"name\"
            name=\"name\"
            required
            class=\"w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all\"
            placeholder=\"John Doe\"
            value=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "name", [], "any", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "name", [], "any", false, false, false, 74), "")) : ("")), "html", null, true);
            yield "\"
          >
          ";
            // line 76
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", true, true, false, 76)) {
                // line 77
                yield "            <p class=\"text-red-500 text-sm mt-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 77), "html", null, true);
                yield "</p>
          ";
            }
            // line 79
            yield "        </div>
        ";
        }
        // line 81
        yield "
        <!-- Email Field -->
        <div>
          <label for=\"email\" class=\"block text-sm font-medium text-gray-700 mb-2\">
            Email Address
          </label>
          <input
            type=\"email\"
            id=\"email\"
            name=\"email\"
            required
            class=\"w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all\"
            placeholder=\"you@example.com\"
            value=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "email", [], "any", true, true, false, 94)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "email", [], "any", false, false, false, 94), "")) : ("")), "html", null, true);
        yield "\"
          >
          ";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", true, true, false, 96)) {
            // line 97
            yield "            <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 97), "html", null, true);
            yield "</p>
          ";
        }
        // line 99
        yield "        </div>

        <!-- Password Field -->
        <div>
          <label for=\"password\" class=\"block text-sm font-medium text-gray-700 mb-2\">
            Password
          </label>
          <div class=\"relative\">
            <input
              type=\"password\"
              id=\"password\"
              name=\"password\"
              required
              minlength=\"6\"
              class=\"w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all\"
              placeholder=\"Password must be at least 6 characters\"
            >
            <button
              type=\"button\"
              id=\"togglePassword\"
              class=\"absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-700 cursor-pointer toggle-password\"
            >
              <svg id=\"eyeIcon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\"
            viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\"
            stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
            class=\"lucide lucide-eye\">
            <path d=\"M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0\" />
            <circle cx=\"12\" cy=\"12\" r=\"3\" />
          </svg>
            </button>
          </div>
          ";
        // line 130
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 130)) {
            // line 131
            yield "            <p class=\"text-red-500 text-sm mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 131), "html", null, true);
            yield "</p>
          ";
        }
        // line 133
        yield "        </div>

        <!-- Submit Button -->
        <button
          type=\"submit\"
          class=\"w-full py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:shadow-lg hover:shadow-blue-500/50 transition-all duration-300 hover:scale-105 transform\"
        >
          ";
        // line 140
        if ((($context["mode"] ?? null) == "login")) {
            // line 141
            yield "            Login
          ";
        } else {
            // line 143
            yield "            Sign Up
          ";
        }
        // line 145
        yield "        </button>
      </form>

      <!-- Toggle Auth Mode -->
      <div class=\"mt-6 text-center\">
        <p class=\"text-gray-600\">
          ";
        // line 151
        if ((($context["mode"] ?? null) == "login")) {
            // line 152
            yield "            Don't have an account?
            <a href=\"?page=signup\" class=\"text-blue-600 font-semibold hover:text-blue-700 transition-colors\">
              Sign Up
            </a>
          ";
        } else {
            // line 157
            yield "            Already have an account?
            <a href=\"?page=login\" class=\"text-blue-600 font-semibold hover:text-blue-700 transition-colors\">
              Login
            </a>
          ";
        }
        // line 162
        yield "        </p>
      </div>
    </div>
  </div>

  <!-- Toggle password visibility -->
 <script>
    const toggleBtn = document.getElementById(\"togglePassword\");
    const passwordInput = document.getElementById(\"password\");
    const eyeIcon = document.getElementById(\"eyeIcon\");

    const eyeSvg = `
      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\"
        viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\"
        stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
        class=\"lucide lucide-eye\">
        <path d=\"M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0\" />
        <circle cx=\"12\" cy=\"12\" r=\"3\" />
      </svg>`;

    const eyeOffSvg = `
      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\"
        viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\"
        stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
        class=\"lucide lucide-eye-off\">
        <path d=\"M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49\" />
        <path d=\"M14.084 14.158a3 3 0 0 1-4.242-4.242\" />
        <path d=\"M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143\" />
        <path d=\"m2 2 20 20\" />
      </svg>`;

    toggleBtn.addEventListener(\"click\", () => {
      const isPasswordVisible = passwordInput.type === \"text\";
      passwordInput.type = isPasswordVisible ? \"password\" : \"text\";
      eyeIcon.outerHTML = isPasswordVisible ? eyeSvg : eyeOffSvg;
    });
  </script>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "auth_page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  295 => 162,  288 => 157,  281 => 152,  279 => 151,  271 => 145,  267 => 143,  263 => 141,  261 => 140,  252 => 133,  246 => 131,  244 => 130,  211 => 99,  205 => 97,  203 => 96,  198 => 94,  183 => 81,  179 => 79,  173 => 77,  171 => 76,  166 => 74,  152 => 62,  150 => 61,  145 => 59,  140 => 56,  128 => 53,  119 => 52,  117 => 51,  111 => 47,  107 => 45,  103 => 43,  101 => 42,  97 => 40,  93 => 38,  89 => 36,  87 => 35,  69 => 19,  66 => 18,  64 => 16,  63 => 15,  61 => 14,  59 => 13,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>{{ mode == 'login' ? 'Login - TicketFlow' : 'Sign Up - TicketFlow' }}</title>
  <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<body class=\"bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen\">
  <div class=\"min-h-screen flex items-center justify-center px-4 py-12\">
    <div class=\"max-w-md w-full bg-white rounded-2xl shadow-xl p-8\">

    {% if toast is defined and toast %}
        {% include 'Toast.html.twig' with {
            'message': toast.message,
            'type': toast.type
        } %}
    {% endif %}
      
      <!-- Logo -->
      <div class=\"text-center mb-8\">
        <a href=\"index.php\" class=\"inline-flex items-center gap-2 mb-6\">
          <div class=\"bg-gradient-to-br from-blue-600 to-purple-600 p-2 rounded-lg\">
            <svg class=\"w-8 h-8 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                d=\"M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z\" />
            </svg>
          </div>
          <span class=\"text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent\">
            TicketFlow
          </span>
        </a>

        <h1 class=\"text-3xl font-bold text-gray-800 mb-2\">
          {% if mode == 'login' %}
            Welcome Back
          {% else %}
            Create Account
          {% endif %}
        </h1>
        <p class=\"text-gray-600\">
          {% if mode == 'login' %}
            Sign in to your account
          {% else %}
            Sign up to get started
          {% endif %}
        </p>
      </div>

      <!-- Toast Message (optional) -->
      {% if toast %}
      <div class=\"mb-6 p-4 rounded-lg {% if toast.type == 'success' %} bg-green-50 border border-green-200 {% else %} bg-red-50 border border-red-200 {% endif %}\">
        <p class=\"{% if toast.type == 'success' %} text-green-700 {% else %} text-red-700 {% endif %} text-sm\">{{ toast.message }}</p>
      </div>
      {% endif %}

      <!-- Auth Form -->
      <form action=\"auth-handler.php\" method=\"POST\" class=\"space-y-5\">
        <input type=\"hidden\" name=\"action\" value=\"{{ mode }}\">

        {% if mode == 'signup' %}
        <!-- Name Field -->
        <div>
          <label for=\"name\" class=\"block text-sm font-medium text-gray-700 mb-2\">
            Full Name
          </label>
          <input
            type=\"text\"
            id=\"name\"
            name=\"name\"
            required
            class=\"w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all\"
            placeholder=\"John Doe\"
            value=\"{{ formData.name|default('') }}\"
          >
          {% if errors.name is defined %}
            <p class=\"text-red-500 text-sm mt-1\">{{ errors.name }}</p>
          {% endif %}
        </div>
        {% endif %}

        <!-- Email Field -->
        <div>
          <label for=\"email\" class=\"block text-sm font-medium text-gray-700 mb-2\">
            Email Address
          </label>
          <input
            type=\"email\"
            id=\"email\"
            name=\"email\"
            required
            class=\"w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all\"
            placeholder=\"you@example.com\"
            value=\"{{ formData.email|default('') }}\"
          >
          {% if errors.email is defined %}
            <p class=\"text-red-500 text-sm mt-1\">{{ errors.email }}</p>
          {% endif %}
        </div>

        <!-- Password Field -->
        <div>
          <label for=\"password\" class=\"block text-sm font-medium text-gray-700 mb-2\">
            Password
          </label>
          <div class=\"relative\">
            <input
              type=\"password\"
              id=\"password\"
              name=\"password\"
              required
              minlength=\"6\"
              class=\"w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all\"
              placeholder=\"Password must be at least 6 characters\"
            >
            <button
              type=\"button\"
              id=\"togglePassword\"
              class=\"absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-700 cursor-pointer toggle-password\"
            >
              <svg id=\"eyeIcon\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\"
            viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\"
            stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
            class=\"lucide lucide-eye\">
            <path d=\"M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0\" />
            <circle cx=\"12\" cy=\"12\" r=\"3\" />
          </svg>
            </button>
          </div>
          {% if errors.password is defined %}
            <p class=\"text-red-500 text-sm mt-1\">{{ errors.password }}</p>
          {% endif %}
        </div>

        <!-- Submit Button -->
        <button
          type=\"submit\"
          class=\"w-full py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:shadow-lg hover:shadow-blue-500/50 transition-all duration-300 hover:scale-105 transform\"
        >
          {% if mode == 'login' %}
            Login
          {% else %}
            Sign Up
          {% endif %}
        </button>
      </form>

      <!-- Toggle Auth Mode -->
      <div class=\"mt-6 text-center\">
        <p class=\"text-gray-600\">
          {% if mode == 'login' %}
            Don't have an account?
            <a href=\"?page=signup\" class=\"text-blue-600 font-semibold hover:text-blue-700 transition-colors\">
              Sign Up
            </a>
          {% else %}
            Already have an account?
            <a href=\"?page=login\" class=\"text-blue-600 font-semibold hover:text-blue-700 transition-colors\">
              Login
            </a>
          {% endif %}
        </p>
      </div>
    </div>
  </div>

  <!-- Toggle password visibility -->
 <script>
    const toggleBtn = document.getElementById(\"togglePassword\");
    const passwordInput = document.getElementById(\"password\");
    const eyeIcon = document.getElementById(\"eyeIcon\");

    const eyeSvg = `
      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\"
        viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\"
        stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
        class=\"lucide lucide-eye\">
        <path d=\"M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0\" />
        <circle cx=\"12\" cy=\"12\" r=\"3\" />
      </svg>`;

    const eyeOffSvg = `
      <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\"
        viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\"
        stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
        class=\"lucide lucide-eye-off\">
        <path d=\"M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49\" />
        <path d=\"M14.084 14.158a3 3 0 0 1-4.242-4.242\" />
        <path d=\"M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143\" />
        <path d=\"m2 2 20 20\" />
      </svg>`;

    toggleBtn.addEventListener(\"click\", () => {
      const isPasswordVisible = passwordInput.type === \"text\";
      passwordInput.type = isPasswordVisible ? \"password\" : \"text\";
      eyeIcon.outerHTML = isPasswordVisible ? eyeSvg : eyeOffSvg;
    });
  </script>
</body>
</html>
", "auth_page.html.twig", "C:\\Users\\Blessing\\Desktop\\ticket-web-app-twig\\templates\\auth_page.html.twig");
    }
}
