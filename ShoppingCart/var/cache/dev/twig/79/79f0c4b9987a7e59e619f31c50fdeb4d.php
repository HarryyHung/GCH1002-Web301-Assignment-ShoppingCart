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

/* home/index.html.twig */
class __TwigTemplate_f89464f1e3027c79f1ce2eec6f5ace9c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'welcome' => [$this, 'block_welcome'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("nav.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_welcome($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "welcome"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "welcome"));

        // line 7
        echo "\t<section class=\"welcome gradient home-welcome\">
\t\t<div class=\"welcome-messaging\">
\t\t\t<h2>Hand-made</h2>
\t\t\t<a data-bss-hover-animate=\"pulse\" class=\"button\" style=\"width: 255px;\" href=\"#\">Shop with us</a>
\t\t</div>
\t\t<div class=\"diagonal-line pattern\">
\t\t\t<svg width='4' height='4' viewbox='0 0 6 6' xmlns='http://www.w3.org/2000/svg'>
\t\t\t\t<g fill='##212121' fill-opacity='0.7' fill-rule='evenodd'><path d='M5 0h1L0 6V5zM6 5v1H5z'/></g>
\t\t\t</svg>
\t\t</div>

\t\t<div class=\"welcome-image\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, twig_random($this->env, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 18, $this->source); })())), "imageID", [], "any", false, false, false, 18))), "html", null, true);
        echo "\"></div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "\t<div class=\"content\">
\t\t<div class=\"d-flex all-product-banner\" style=\"background: linear-gradient(140deg, rgb(222, 199, 178) 20%, rgb(255, 169, 122) 70%);\">
\t\t\t<div class=\"banner-detail\" style=\"padding: 7.5em;\">
\t\t\t\t<div class=\"tag\">
\t\t\t\t\t<span>All products</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"banner-text\" style=\"padding-top: 0;margin-top: 0;\">
\t\t\t\t\t<h2>All of our products</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"banner-image-container\" style=\"height:auto\">
\t\t\t\t<div class=\"banner-images\">
\t\t\t\t\t<div class=\"banner-image\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, twig_random($this->env, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 36, $this->source); })())), "imageID", [], "any", false, false, false, 36))), "html", null, true);
        echo "\" style=\"background: linear-gradient(140deg, rgb(222, 199, 178) 20%, rgb(255, 169, 122) 70%);     height: 100%;     width: 100%;\"></div>
\t\t\t\t\t<div class=\"banner-image\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, twig_random($this->env, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 37, $this->source); })())), "imageID", [], "any", false, false, false, 37))), "html", null, true);
        echo "\" style=\"background: linear-gradient(140deg, rgb(222, 199, 178) 20%, rgb(255, 169, 122) 70%);     height: 100%;     width: 100%;\"></div>
\t\t\t\t\t<div class=\"banner-image\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, twig_random($this->env, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 38, $this->source); })())), "imageID", [], "any", false, false, false, 38))), "html", null, true);
        echo "\" style=\"background: linear-gradient(140deg, rgb(222, 199, 178) 20%, rgb(255, 169, 122) 70%);     height: 100%;     width: 100%;\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"product-list\" data-per-row=\"3\">

\t\t\t";
        // line 46
        echo "\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 48
            echo "
\t\t\t\t\t<div class=\"col-xxl-4\">
\t\t\t\t\t\t<a class=\"product-item rollover\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t\t\t\t<figure class=\"figure product-item-image-container\"><img class=\"img-fluid figure-img product-image\" src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getRandomImage", [], "method", false, false, false, 52), "imageID", [], "any", false, false, false, 52))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"product-item-status\">
\t\t\t\t\t\t\t\t\t\t<span>Pre-order</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"product-item-info\">
\t\t\t\t\t\t\t\t\t<div class=\"product-item-info-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-item-info-name\">
\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-item-price\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"currency-sign\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 64), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 72
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t\t</div>


\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 74,  202 => 72,  192 => 64,  185 => 60,  174 => 52,  169 => 50,  165 => 48,  161 => 47,  158 => 46,  148 => 38,  144 => 37,  140 => 36,  126 => 24,  116 => 23,  103 => 18,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'nav.html.twig' %}

{% block title %}Homepage
{% endblock %}

{% block welcome %}
\t<section class=\"welcome gradient home-welcome\">
\t\t<div class=\"welcome-messaging\">
\t\t\t<h2>Hand-made</h2>
\t\t\t<a data-bss-hover-animate=\"pulse\" class=\"button\" style=\"width: 255px;\" href=\"#\">Shop with us</a>
\t\t</div>
\t\t<div class=\"diagonal-line pattern\">
\t\t\t<svg width='4' height='4' viewbox='0 0 6 6' xmlns='http://www.w3.org/2000/svg'>
\t\t\t\t<g fill='##212121' fill-opacity='0.7' fill-rule='evenodd'><path d='M5 0h1L0 6V5zM6 5v1H5z'/></g>
\t\t\t</svg>
\t\t</div>

\t\t<div class=\"welcome-image\"><img src=\"{{asset('images/product/'~random(images).imageID)}}\"></div>
\t</section>
{% endblock %}


{% block body %}
\t<div class=\"content\">
\t\t<div class=\"d-flex all-product-banner\" style=\"background: linear-gradient(140deg, rgb(222, 199, 178) 20%, rgb(255, 169, 122) 70%);\">
\t\t\t<div class=\"banner-detail\" style=\"padding: 7.5em;\">
\t\t\t\t<div class=\"tag\">
\t\t\t\t\t<span>All products</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"banner-text\" style=\"padding-top: 0;margin-top: 0;\">
\t\t\t\t\t<h2>All of our products</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"banner-image-container\" style=\"height:auto\">
\t\t\t\t<div class=\"banner-images\">
\t\t\t\t\t<div class=\"banner-image\"><img src=\"{{asset('images/product/'~random(images).imageID)}}\" style=\"background: linear-gradient(140deg, rgb(222, 199, 178) 20%, rgb(255, 169, 122) 70%);     height: 100%;     width: 100%;\"></div>
\t\t\t\t\t<div class=\"banner-image\"><img src=\"{{asset('images/product/'~random(images).imageID)}}\" style=\"background: linear-gradient(140deg, rgb(222, 199, 178) 20%, rgb(255, 169, 122) 70%);     height: 100%;     width: 100%;\"></div>
\t\t\t\t\t<div class=\"banner-image\"><img src=\"{{asset('images/product/'~random(images).imageID)}}\" style=\"background: linear-gradient(140deg, rgb(222, 199, 178) 20%, rgb(255, 169, 122) 70%);     height: 100%;     width: 100%;\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"product-list\" data-per-row=\"3\">

\t\t\t{# display every product in products, 3 products each row #}
\t\t\t<div class=\"row\">
\t\t\t\t{% for product in products %}

\t\t\t\t\t<div class=\"col-xxl-4\">
\t\t\t\t\t\t<a class=\"product-item rollover\" href=\"{{path('product_detail', {'id': product.id })}}\">
\t\t\t\t\t\t\t<div class=\"product-item-container\">
\t\t\t\t\t\t\t\t<figure class=\"figure product-item-image-container\"><img class=\"img-fluid figure-img product-image\" src=\"{{asset('images/product/'~product.getRandomImage().imageID)}}\">
\t\t\t\t\t\t\t\t\t<div class=\"product-item-status\">
\t\t\t\t\t\t\t\t\t\t<span>Pre-order</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t<div class=\"product-item-info\">
\t\t\t\t\t\t\t\t\t<div class=\"product-item-info-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-item-info-name\">
\t\t\t\t\t\t\t\t\t\t\t<span>{{product.name}}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-item-price\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"currency-sign\">\$</span>
\t\t\t\t\t\t\t\t\t\t\t<span>{{product.price}}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t{# {% endfor %} #}

\t\t\t\t{% endfor %}
\t\t\t</div>


\t\t</div>
\t</div>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\home\\index.html.twig");
    }
}
