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

/* _footer.html.twig */
class __TwigTemplate_9b3c2fd90940c15918c4fe8086566081 extends Template
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
        // line 2
        yield "<footer class=\"max-w-[1440px] mx-auto px-6 py-12 md:px-12 border-t border-gray-200 bg-white\">
  <div class=\"grid md:grid-cols-4 gap-8 mb-8\">
    <div>
      <div class=\"flex items-center gap-2 mb-4\">
        <div class=\"bg-gradient-to-br from-blue-600 to-purple-600 p-2 rounded-lg\">
          <svg class=\"w-5 h-5 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z\" />
          </svg>
        </div>
        <span class=\"text-xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent\">
          TicketFlow
        </span>
      </div>
      <p class=\"text-gray-600\">
        Streamline your support workflow with powerful ticket management.
      </p>
    </div>

    <div>
      <h4 class=\"font-semibold text-gray-800 mb-4\">Product</h4>
      <ul class=\"space-y-2 text-gray-600\">
        <li>
          <a href=\"#features\" class=\"hover:text-blue-600 transition-colors\">
            Features
          </a>
        </li>
        <li>
          <a href=\"#pricing\" class=\"hover:text-blue-600 transition-colors\">
            Pricing
          </a>
        </li>
        <li>
          <a href=\"#integrations\" class=\"hover:text-blue-600 transition-colors\">
            Integrations
          </a>
        </li>
        <li>
          <a href=\"#api\" class=\"hover:text-blue-600 transition-colors\">
            API
          </a>
        </li>
      </ul>
    </div>

    <div>
      <h4 class=\"font-semibold text-gray-800 mb-4\">Company</h4>
      <ul class=\"space-y-2 text-gray-600\">
        <li>
          <a href=\"#about\" class=\"hover:text-blue-600 transition-colors\">
            About
          </a>
        </li>
        <li>
          <a href=\"#blog\" class=\"hover:text-blue-600 transition-colors\">
            Blog
          </a>
        </li>
        <li>
          <a href=\"#careers\" class=\"hover:text-blue-600 transition-colors\">
            Careers
          </a>
        </li>
        <li>
          <a href=\"#contact\" class=\"hover:text-blue-600 transition-colors\">
            Contact
          </a>
        </li>
      </ul>
    </div>

    <div>
      <h4 class=\"font-semibold text-gray-800 mb-4\">Legal</h4>
      <ul class=\"space-y-2 text-gray-600\">
        <li>
          <a href=\"#privacy\" class=\"hover:text-blue-600 transition-colors\">
            Privacy
          </a>
        </li>
        <li>
          <a href=\"#terms\" class=\"hover:text-blue-600 transition-colors\">
            Terms
          </a>
        </li>
        <li>
          <a href=\"#security\" class=\"hover:text-blue-600 transition-colors\">
            Security
          </a>
        </li>
        <li>
          <a href=\"#compliance\" class=\"hover:text-blue-600 transition-colors\">
            Compliance
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class=\"pt-8 border-t border-gray-200 text-center text-gray-600\">
    <p>&copy; ";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("current_year", $context)) ? (Twig\Extension\CoreExtension::default(($context["current_year"] ?? null), "2025")) : ("2025")), "html", null, true);
        yield " TicketFlow. All rights reserved.</p>
  </div>
</footer>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_footer.html.twig";
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
        return array (  142 => 100,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# _footer.html.twig - Reusable footer component #}
<footer class=\"max-w-[1440px] mx-auto px-6 py-12 md:px-12 border-t border-gray-200 bg-white\">
  <div class=\"grid md:grid-cols-4 gap-8 mb-8\">
    <div>
      <div class=\"flex items-center gap-2 mb-4\">
        <div class=\"bg-gradient-to-br from-blue-600 to-purple-600 p-2 rounded-lg\">
          <svg class=\"w-5 h-5 text-white\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z\" />
          </svg>
        </div>
        <span class=\"text-xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent\">
          TicketFlow
        </span>
      </div>
      <p class=\"text-gray-600\">
        Streamline your support workflow with powerful ticket management.
      </p>
    </div>

    <div>
      <h4 class=\"font-semibold text-gray-800 mb-4\">Product</h4>
      <ul class=\"space-y-2 text-gray-600\">
        <li>
          <a href=\"#features\" class=\"hover:text-blue-600 transition-colors\">
            Features
          </a>
        </li>
        <li>
          <a href=\"#pricing\" class=\"hover:text-blue-600 transition-colors\">
            Pricing
          </a>
        </li>
        <li>
          <a href=\"#integrations\" class=\"hover:text-blue-600 transition-colors\">
            Integrations
          </a>
        </li>
        <li>
          <a href=\"#api\" class=\"hover:text-blue-600 transition-colors\">
            API
          </a>
        </li>
      </ul>
    </div>

    <div>
      <h4 class=\"font-semibold text-gray-800 mb-4\">Company</h4>
      <ul class=\"space-y-2 text-gray-600\">
        <li>
          <a href=\"#about\" class=\"hover:text-blue-600 transition-colors\">
            About
          </a>
        </li>
        <li>
          <a href=\"#blog\" class=\"hover:text-blue-600 transition-colors\">
            Blog
          </a>
        </li>
        <li>
          <a href=\"#careers\" class=\"hover:text-blue-600 transition-colors\">
            Careers
          </a>
        </li>
        <li>
          <a href=\"#contact\" class=\"hover:text-blue-600 transition-colors\">
            Contact
          </a>
        </li>
      </ul>
    </div>

    <div>
      <h4 class=\"font-semibold text-gray-800 mb-4\">Legal</h4>
      <ul class=\"space-y-2 text-gray-600\">
        <li>
          <a href=\"#privacy\" class=\"hover:text-blue-600 transition-colors\">
            Privacy
          </a>
        </li>
        <li>
          <a href=\"#terms\" class=\"hover:text-blue-600 transition-colors\">
            Terms
          </a>
        </li>
        <li>
          <a href=\"#security\" class=\"hover:text-blue-600 transition-colors\">
            Security
          </a>
        </li>
        <li>
          <a href=\"#compliance\" class=\"hover:text-blue-600 transition-colors\">
            Compliance
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class=\"pt-8 border-t border-gray-200 text-center text-gray-600\">
    <p>&copy; {{ current_year|default('2025') }} TicketFlow. All rights reserved.</p>
  </div>
</footer>", "_footer.html.twig", "C:\\Users\\Blessing\\Desktop\\ticket-web-app-twig\\templates\\_footer.html.twig");
    }
}
