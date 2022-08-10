<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/login.html.twig */
class __TwigTemplate_d189326e19f345f92ce6e54b12657af5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "nav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/login.html.twig"));

        $this->parent = $this->loadTemplate("nav.html.twig", "home/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content\">
                <div class=\"row\">
                    <div class=\"col-xxl-6 d-xxl-flex justify-content-xxl-center align-items-xxl-center\"><img class=\"d-flex d-xxl-flex justify-content-center align-items-center align-content-center justify-content-xxl-center align-items-xxl-center\" src=\"https://i.pinimg.com/originals/55/6b/f9/556bf9796cce36190590d13a9b457960.jpg\" style=\"width: 100%;height: auto;border-width: 3px;border-style: solid;\"></div>
                    <div class=\"col\">
                        <form style=\"margin-bottom: 1em;\">
                            <h1 style=\"text-align: center;margin-bottom: 1em;\">Log in</h1>
                            <label class=\"form-label fs-4\" for=\"Email\">Email address</label>
                            <input class=\"form-control form-control-lg input\" type=\"email\" name=\"Email\" placeholder=\"Example@domain.com\" inputmode=\"email\" required=\"\">
                            <label class=\"form-label fs-4\" for=\"Password\">Password</label>
                            <input class=\"form-control form-control-lg input\" type=\"password\" placeholder=\"*********\" name=\"Password\" required=\"\">
                            <button class=\"button\" type=\"submit\" style=\"width: 100%;\">Log in</button>
                        </form><a class=\"button\" href=\"register.html\">Register</a>
                    </div>
                </div>
            </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"nav.html.twig\" %}
{% block body %}
    <div class=\"content\">
                <div class=\"row\">
                    <div class=\"col-xxl-6 d-xxl-flex justify-content-xxl-center align-items-xxl-center\"><img class=\"d-flex d-xxl-flex justify-content-center align-items-center align-content-center justify-content-xxl-center align-items-xxl-center\" src=\"https://i.pinimg.com/originals/55/6b/f9/556bf9796cce36190590d13a9b457960.jpg\" style=\"width: 100%;height: auto;border-width: 3px;border-style: solid;\"></div>
                    <div class=\"col\">
                        <form style=\"margin-bottom: 1em;\">
                            <h1 style=\"text-align: center;margin-bottom: 1em;\">Log in</h1>
                            <label class=\"form-label fs-4\" for=\"Email\">Email address</label>
                            <input class=\"form-control form-control-lg input\" type=\"email\" name=\"Email\" placeholder=\"Example@domain.com\" inputmode=\"email\" required=\"\">
                            <label class=\"form-label fs-4\" for=\"Password\">Password</label>
                            <input class=\"form-control form-control-lg input\" type=\"password\" placeholder=\"*********\" name=\"Password\" required=\"\">
                            <button class=\"button\" type=\"submit\" style=\"width: 100%;\">Log in</button>
                        </form><a class=\"button\" href=\"register.html\">Register</a>
                    </div>
                </div>
            </div>
{% endblock %}
            ", "home/login.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\home\\login.html.twig");
    }
}
