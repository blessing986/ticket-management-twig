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

/* landing.html.twig */
class __TwigTemplate_87baf4d32e77cff6f5bba65695abc151 extends Template
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
  <title>Ticket Web App using Twig</title>
  <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<body>
  <div class=\"min-h-screen bg-gradient-to-br from-slate-50 to-blue-50\">
    <!-- Main Container with max-width -->
    <div class=\"max-w-[1440px] mx-auto\">
      <!-- Navigation -->
      <nav class=\"flex items-center justify-between px-4 py-4 md:px-12 md:py-6\">
        <div class=\"flex items-center gap-2\">
          <div class=\"bg-gradient-to-br from-blue-600 to-purple-600 p-1.5 md:p-2 rounded-lg\">
            <svg class=\"w-5 h-5 md:w-6 md:h-6 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z\" />
            </svg>
          </div>
          <span class=\"text-xl md:text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent\">
            TicketFlow
          </span>
        </div>
        <div class=\"flex gap-2 md:gap-3\">
          <a href=\"?page=login\" class=\"px-3 py-2 md:px-6 text-sm md:text-base text-gray-700 font-medium hover:text-blue-600 transition-all duration-300 hover:scale-105 cursor-pointer\">
            Login
          </a>
          <a href=\"?page=signup\" class=\"px-3 py-2 md:px-6 text-sm md:text-base bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg font-medium hover:shadow-lg hover:shadow-blue-500/50 transition-all duration-300 hover:scale-105 transform cursor-pointer\">
            Get Started
          </a>
        </div>
      </nav>

      <!-- Hero Section with Wavy Background -->
      <section class=\"relative px-6 py-20 md:px-12 md:py-32 overflow-hidden\">
        <!-- Wavy Background -->
        <div class=\"absolute inset-0 z-0\">
          <svg class=\"absolute bottom-0 w-full h-64 md:h-96\" viewBox=\"0 0 1440 320\" preserveAspectRatio=\"none\">
            <path fill=\"url(#gradient)\" fill-opacity=\"0.3\" d=\"M0,96L48,112C96,128,192,160,288,154.7C384,149,480,107,576,90.7C672,75,768,85,864,106.7C960,128,1056,160,1152,154.7C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\" />
            <defs>
              <linearGradient id=\"gradient\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"0%\">
                <stop offset=\"0%\" stop-color=\"#3b82f6\" />
                <stop offset=\"100%\" stop-color=\"#9333ea\" />
              </linearGradient>
            </defs>
          </svg>
        </div>

        <!-- Decorative Circles -->
        <div class=\"absolute top-20 right-10 w-64 h-64 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full opacity-20 blur-3xl animate-pulse\"></div>
        <div class=\"absolute bottom-10 left-10 w-48 h-48 bg-gradient-to-br from-blue-400 to-cyan-400 rounded-full opacity-20 blur-3xl animate-pulse-delayed\"></div>

        <!-- Hero Content -->
        <div class=\"relative z-10 max-w-4xl mx-auto text-center\">
          <div class=\"inline-block mb-6 px-4 py-2 bg-blue-100 rounded-full\">
            <span class=\"text-blue-600 font-semibold text-sm\">
              🎫 Next-Gen Ticket Management
            </span>
          </div>
          <h1 class=\"text-5xl md:text-7xl font-bold mb-6 leading-tight\">
            <span class=\"bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent\">
              Streamline Your
            </span>
            <br />
            <span class=\"text-gray-800\">Support Workflow</span>
          </h1>
          <p class=\"text-xl md:text-2xl text-gray-600 mb-10 max-w-2xl mx-auto\">
            Manage, track, and resolve customer tickets with lightning speed.
            Transform chaos into clarity with TicketFlow.
          </p>
          <div class=\"flex justify-center items-center\">
            <a href=\"?page=signup\" class=\"group px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold text-lg hover:shadow-2xl hover:shadow-blue-500/50 transition-all duration-300 hover:scale-105 transform flex items-center gap-2 cursor-pointer\">
              Get Started Free
              <svg class=\"w-5 h-5 group-hover:translate-x-1 transition-transform duration-300\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M14 5l7 7m0 0l-7 7m7-7H3\" />
              </svg>
            </a>
          </div>
        </div>
      </section>

      <!-- Features Section -->
      <section class=\"px-6 py-20 md:px-12\">
        <div class=\"text-center mb-16\">
          <h2 class=\"text-4xl md:text-5xl font-bold mb-4 text-gray-800\">
            Powerful Features
          </h2>
          <p class=\"text-xl text-gray-600 max-w-2xl mx-auto\">
            Everything you need to deliver exceptional customer support
          </p>
        </div>

        <div class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-8\">
          ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["features"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 96
            yield "          <div class=\"group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-100\">
            <div class=\"inline-block p-3 bg-gradient-to-br ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "color", [], "any", false, false, false, 97), "html", null, true);
            yield " rounded-xl mb-4 group-hover:scale-110 transition-transform duration-300\">
              <div class=\"text-white\">
                ";
            // line 99
            yield CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "icon", [], "any", false, false, false, 99);
            yield "
              </div>
            </div>
            <h3 class=\"text-2xl font-bold mb-3 text-gray-800\">
              ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "title", [], "any", false, false, false, 103), "html", null, true);
            yield "
            </h3>
            <p class=\"text-gray-600 leading-relaxed\">
              ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feature"], "description", [], "any", false, false, false, 106), "html", null, true);
            yield "
            </p>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "        </div>
      </section>

      <!-- Footer -->
     ";
        // line 114
        yield from $this->load("_footer.html.twig", 114)->unwrap()->yield($context);
        // line 115
        yield "    </div>
  </div>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "landing.html.twig";
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
        return array (  181 => 115,  179 => 114,  173 => 110,  163 => 106,  157 => 103,  150 => 99,  145 => 97,  142 => 96,  138 => 95,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Ticket Web App using Twig</title>
  <script src=\"https://cdn.tailwindcss.com\"></script>
</head>
<body>
  <div class=\"min-h-screen bg-gradient-to-br from-slate-50 to-blue-50\">
    <!-- Main Container with max-width -->
    <div class=\"max-w-[1440px] mx-auto\">
      <!-- Navigation -->
      <nav class=\"flex items-center justify-between px-4 py-4 md:px-12 md:py-6\">
        <div class=\"flex items-center gap-2\">
          <div class=\"bg-gradient-to-br from-blue-600 to-purple-600 p-1.5 md:p-2 rounded-lg\">
            <svg class=\"w-5 h-5 md:w-6 md:h-6 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z\" />
            </svg>
          </div>
          <span class=\"text-xl md:text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent\">
            TicketFlow
          </span>
        </div>
        <div class=\"flex gap-2 md:gap-3\">
          <a href=\"?page=login\" class=\"px-3 py-2 md:px-6 text-sm md:text-base text-gray-700 font-medium hover:text-blue-600 transition-all duration-300 hover:scale-105 cursor-pointer\">
            Login
          </a>
          <a href=\"?page=signup\" class=\"px-3 py-2 md:px-6 text-sm md:text-base bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg font-medium hover:shadow-lg hover:shadow-blue-500/50 transition-all duration-300 hover:scale-105 transform cursor-pointer\">
            Get Started
          </a>
        </div>
      </nav>

      <!-- Hero Section with Wavy Background -->
      <section class=\"relative px-6 py-20 md:px-12 md:py-32 overflow-hidden\">
        <!-- Wavy Background -->
        <div class=\"absolute inset-0 z-0\">
          <svg class=\"absolute bottom-0 w-full h-64 md:h-96\" viewBox=\"0 0 1440 320\" preserveAspectRatio=\"none\">
            <path fill=\"url(#gradient)\" fill-opacity=\"0.3\" d=\"M0,96L48,112C96,128,192,160,288,154.7C384,149,480,107,576,90.7C672,75,768,85,864,106.7C960,128,1056,160,1152,154.7C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\" />
            <defs>
              <linearGradient id=\"gradient\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"0%\">
                <stop offset=\"0%\" stop-color=\"#3b82f6\" />
                <stop offset=\"100%\" stop-color=\"#9333ea\" />
              </linearGradient>
            </defs>
          </svg>
        </div>

        <!-- Decorative Circles -->
        <div class=\"absolute top-20 right-10 w-64 h-64 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full opacity-20 blur-3xl animate-pulse\"></div>
        <div class=\"absolute bottom-10 left-10 w-48 h-48 bg-gradient-to-br from-blue-400 to-cyan-400 rounded-full opacity-20 blur-3xl animate-pulse-delayed\"></div>

        <!-- Hero Content -->
        <div class=\"relative z-10 max-w-4xl mx-auto text-center\">
          <div class=\"inline-block mb-6 px-4 py-2 bg-blue-100 rounded-full\">
            <span class=\"text-blue-600 font-semibold text-sm\">
              🎫 Next-Gen Ticket Management
            </span>
          </div>
          <h1 class=\"text-5xl md:text-7xl font-bold mb-6 leading-tight\">
            <span class=\"bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent\">
              Streamline Your
            </span>
            <br />
            <span class=\"text-gray-800\">Support Workflow</span>
          </h1>
          <p class=\"text-xl md:text-2xl text-gray-600 mb-10 max-w-2xl mx-auto\">
            Manage, track, and resolve customer tickets with lightning speed.
            Transform chaos into clarity with TicketFlow.
          </p>
          <div class=\"flex justify-center items-center\">
            <a href=\"?page=signup\" class=\"group px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold text-lg hover:shadow-2xl hover:shadow-blue-500/50 transition-all duration-300 hover:scale-105 transform flex items-center gap-2 cursor-pointer\">
              Get Started Free
              <svg class=\"w-5 h-5 group-hover:translate-x-1 transition-transform duration-300\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M14 5l7 7m0 0l-7 7m7-7H3\" />
              </svg>
            </a>
          </div>
        </div>
      </section>

      <!-- Features Section -->
      <section class=\"px-6 py-20 md:px-12\">
        <div class=\"text-center mb-16\">
          <h2 class=\"text-4xl md:text-5xl font-bold mb-4 text-gray-800\">
            Powerful Features
          </h2>
          <p class=\"text-xl text-gray-600 max-w-2xl mx-auto\">
            Everything you need to deliver exceptional customer support
          </p>
        </div>

        <div class=\"grid md:grid-cols-2 lg:grid-cols-3 gap-8\">
          {% for feature in features %}
          <div class=\"group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 cursor-pointer border border-gray-100\">
            <div class=\"inline-block p-3 bg-gradient-to-br {{ feature.color }} rounded-xl mb-4 group-hover:scale-110 transition-transform duration-300\">
              <div class=\"text-white\">
                {{ feature.icon|raw }}
              </div>
            </div>
            <h3 class=\"text-2xl font-bold mb-3 text-gray-800\">
              {{ feature.title }}
            </h3>
            <p class=\"text-gray-600 leading-relaxed\">
              {{ feature.description }}
            </p>
          </div>
          {% endfor %}
        </div>
      </section>

      <!-- Footer -->
     {% include '_footer.html.twig' %}
    </div>
  </div>
</body>
</html>", "landing.html.twig", "C:\\Users\\Blessing\\Desktop\\ticket-web-app-twig\\templates\\landing.html.twig");
    }
}
