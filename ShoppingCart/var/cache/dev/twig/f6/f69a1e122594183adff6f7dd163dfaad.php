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

/* home/cart.html.twig */
class __TwigTemplate_c1425f32b3cce1cfe66b6acc496527ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/cart.html.twig"));

        $this->parent = $this->loadTemplate("nav.html.twig", "home/cart.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"content\">
                <div class=\"row\">
                    <div class=\"col\">
                        <form>
                            <div class=\"col\">
                                <h1>Cart</h1>
                                
                                ";
        // line 14
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "                                ";
            // line 16
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 16, $this->source); })()), "getProductIDById", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 16)], "method", false, false, false, 16)) {
                // line 17
                echo "                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <form>
                                                <div class=\"container\">
                                                    <div class=\"row cart-row\">
                                                        <div class=\"col-md-3 d-xxl-flex justify-content-xxl-center align-items-xxl-center cart-column\"><img class=\"cart-image\" src=\"
                                                            ";
                // line 24
                echo "                                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "getImages", [], "any", false, false, false, 24) != null)) {
                    // line 25
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getRandomImage", [], "method", false, false, false, 25), "imageID", [], "any", false, false, false, 25))), "html", null, true);
                    echo " 
                                                            ";
                } else {
                    // line 27
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundle/images/product2/img2pro2.jpeg"), "html", null, true);
                    echo "
                                                            ";
                }
                // line 29
                echo "                                                        \"></div>
                                                        <div class=\"col-md-3 d-xxl-flex justify-content-xxl-start align-items-xxl-center\">
                                                            <h4>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo "</h4>
                                                        </div>
                                                        <div class=\"col-md-3 d-xxl-flex justify-content-xxl-center align-items-xxl-center\">
                                                            <div class=\"row\">
                                                                <div class=\"col\"><a class=\"button\" href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_increase_quantity", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" style=\"border-radius: 10em;\">+</a></div>
                                                                <div class=\"col\"><input class=\"form-control\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 36, $this->source); })()), "getQuantity", [], "method", false, false, false, 36), "html", null, true);
                echo "\" type=\"text\" style=\"border-radius: 10em;\"></div>
                                                                <div class=\"col\"><a class=\"button\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_decrease_quantity", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" style=\"border-radius: 10em;\">-</a></div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3 d-xxl-flex align-items-xxl-center\" style=\"background: #212121;color: rgb(247,251,255);\">
                                                            <h1 style=\"border-color: rgb(255,255,255);\">";
                // line 41
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41) * twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 41, $this->source); })()), "getQuantity", [], "method", false, false, false, 41)), "html", null, true);
                echo "</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                ";
            }
            // line 49
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
                                <div class=\"row\">
                                    <div class=\"col d-xxl-flex justify-content-xxl-end align-items-xxl-end\">
                                        <h5 style=\"background: #c9908c;padding: 1em;border: .15em solid #212121 ;\">Subtotal:<span>\$</span><span>";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["subtotal"]) || array_key_exists("subtotal", $context) ? $context["subtotal"] : (function () { throw new RuntimeError('Variable "subtotal" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col d-xxl-flex justify-content-end align-items-end align-content-end justify-content-xxl-end align-items-xxl-center\">
                                <button class=\"d-xxl-flex button\" onclick=\"location.href = '";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "'\" style=\"margin-left: auto;margin-right: 0%;font-size: 2em;margin-top: 3%;\"
                                >Checkout</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 59,  158 => 53,  153 => 50,  147 => 49,  136 => 41,  129 => 37,  125 => 36,  121 => 35,  114 => 31,  110 => 29,  104 => 27,  98 => 25,  95 => 24,  87 => 17,  84 => 16,  82 => 15,  77 => 14,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"nav.html.twig\" %}



{% block body %}
    <div class=\"content\">
                <div class=\"row\">
                    <div class=\"col\">
                        <form>
                            <div class=\"col\">
                                <h1>Cart</h1>
                                
                                {# display all the product in the cart #}
                                {% for product in products %}
                                {# display if the product is in the cart #}
                                {% if cart.getProductIDById(product.id)%}
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <form>
                                                <div class=\"container\">
                                                    <div class=\"row cart-row\">
                                                        <div class=\"col-md-3 d-xxl-flex justify-content-xxl-center align-items-xxl-center cart-column\"><img class=\"cart-image\" src=\"
                                                            {# display the image of the product #}
                                                            {% if product.getImages != null %}
                                                                {{asset('images/product/'~product.getRandomImage().imageID)}} 
                                                            {% else %}
                                                                {{ asset('bundle/images/product2/img2pro2.jpeg') }}
                                                            {% endif %}
                                                        \"></div>
                                                        <div class=\"col-md-3 d-xxl-flex justify-content-xxl-start align-items-xxl-center\">
                                                            <h4>{{ product.name }}</h4>
                                                        </div>
                                                        <div class=\"col-md-3 d-xxl-flex justify-content-xxl-center align-items-xxl-center\">
                                                            <div class=\"row\">
                                                                <div class=\"col\"><a class=\"button\" href=\"{{path('product_increase_quantity', {'id': product.id})}}\" style=\"border-radius: 10em;\">+</a></div>
                                                                <div class=\"col\"><input class=\"form-control\" value=\"{{cart.getQuantity()}}\" type=\"text\" style=\"border-radius: 10em;\"></div>
                                                                <div class=\"col\"><a class=\"button\" href=\"{{path('product_decrease_quantity', {'id': product.id})}}\" style=\"border-radius: 10em;\">-</a></div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3 d-xxl-flex align-items-xxl-center\" style=\"background: #212121;color: rgb(247,251,255);\">
                                                            <h1 style=\"border-color: rgb(255,255,255);\">{{product.price * cart.getQuantity()}}</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                {% endif %}
                                {% endfor %}

                                <div class=\"row\">
                                    <div class=\"col d-xxl-flex justify-content-xxl-end align-items-xxl-end\">
                                        <h5 style=\"background: #c9908c;padding: 1em;border: .15em solid #212121 ;\">Subtotal:<span>\$</span><span>{{subtotal}}</span></h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col d-xxl-flex justify-content-end align-items-end align-content-end justify-content-xxl-end align-items-xxl-center\">
                                <button class=\"d-xxl-flex button\" onclick=\"location.href = '{{path('checkout')}}'\" style=\"margin-left: auto;margin-right: 0%;font-size: 2em;margin-top: 3%;\"
                                >Checkout</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
{% endblock %}", "home/cart.html.twig", "C:\\Users\\buidu\\OneDrive\\Documents\\GitHub\\GCH1002-Web301-Assignment-ShoppingCart\\ShoppingCart\\templates\\home\\cart.html.twig");
    }
}
