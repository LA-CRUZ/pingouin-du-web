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

/* layout.html.twig */
class __TwigTemplate_212d5ad19894a0df1ca2435f847b5c3b7d958cfb19e7125505b3379d4f92794c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'main_content' => [$this, 'block_main_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <main>
        ";
        // line 5
        $this->displayBlock('main_content', $context, $blocks);
        // line 6
        echo "        
        <div class=\"chat-popup\" id=\"myForm\">
            <div class=\"form-container\">
                <h1>Nous sommes à votre disposition !</h1>
                <div id=\"output\"></div>

                <div id=\"container\">
                    <input type=\"text\" id=\"input\" value=\"\" placeholder=\"Une question ?\">
                </div>

                <p>(Entrée pour valider)</p>
            </div>
        </div>

        <a class=\"open-button\"><i class=\"fas fa-comment-alt\"></i></a>
    </main>
    <script>
        \$(document).ready(function () {
            
            \$('.chat-popup').hide();
            \$('.open-button').click(function (event) {
                \$('.chat-popup').toggle(\"slow\");
            });
        });

        var question = '<h2>Quelle est votre problème ?</h2>';\t\t\t\t// first question

        var output = document.getElementById('output');\t\t\t\t// store id=\"output\" in output variable
        output.innerHTML = question;\t\t\t\t\t\t\t\t// ouput first question

        function bot() { 
            var input = document.getElementById(\"input\").value;
            console.log(input);

            keywords = [\"velo\", \"petit_budget\", \"agenda\", \"loisirs\", \"rencontres\", \"trains\", \"abonnement\", \"bus\", \"besoin_aide\", \"handicap\", \"crous\", \"urgence_log\", \"recherche_log\", \"jobs\", \"impot\", \"aide_log\", \"apl\", \"sexualite\"];
        
            if(input.includes(\"velo\")) {
                window.location = \"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "velo"]);
        echo "\";
            }
            if(input.includes(\"budget\")) {
                window.location = \"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "petit_budget"]);
        echo "\";
            }
            if(input.includes(\"agenda\")) {
                window.location = \"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "agenda"]);
        echo "\";
            }
            if(input.includes(\"loisirs\")) {
                window.location = \"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "loisirs"]);
        echo "\";
            }
            if(input.includes(\"rencontres\")) {
                window.location = \"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "rencontres"]);
        echo "\";
            }   
            if(input.includes(\"trains\")) {
                window.location = \"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "trains"]);
        echo "\";
            }   
            if(input.includes(\"abonnement\")) {
                window.location = \"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "abonnement"]);
        echo "\";
            }
            if(input.includes(\"bus\")) {
                window.location = \"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "bus"]);
        echo "\";
            }
            if(input.includes(\"besoin\")) {
                window.location = \"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "besoin_aide"]);
        echo "\";
            }
            if(input.includes(\"handicap\")) {
                window.location = \"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "handicap"]);
        echo "\";
            }
            if(input.includes(\"crous\")) {
                window.location = \"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "crous"]);
        echo "\";
            }
            if(input.includes(\"urgence\")) {
                window.location = \"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "urgence_log"]);
        echo "\";
            }
            if(input.includes(\"recherche\")) {
                window.location = \"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "recherche_log"]);
        echo "\";
            }
            if(input.includes(\"jobs\")) {
                window.location = \"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "jobs"]);
        echo "\";
            }
            if(input.includes(\"impot\")) {
                window.location = \"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "impot"]);
        echo "\";
            }
            if(input.includes(\"aide\")) {
                window.location = \"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "besoin_aide"]);
        echo "\";
            }
            if(input.includes(\"apl\")) {
                window.location = \"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "apl"]);
        echo "\";
            }
            if(input.includes(\"sexualite\")) {
                window.location = \"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list", ["keyword" => "sexualite"]);
        echo "\";
            }
        }

        function timedQuestion() {
            output.innerHTML = question;
        }

        //push enter key (using jquery), to run bot function.
        \$(document).keypress(function(e) {
            if (e.which == 13) {
                bot();\t// run bot function when enter key pressed
                questionNum++;\t// increase questionNum count by 1
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 113
        echo "    <footer>

    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 113,  261 => 112,  243 => 5,  216 => 94,  210 => 91,  204 => 88,  198 => 85,  192 => 82,  186 => 79,  180 => 76,  174 => 73,  168 => 70,  162 => 67,  156 => 64,  150 => 61,  144 => 58,  138 => 55,  132 => 52,  126 => 49,  120 => 46,  114 => 43,  75 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <main>
        {% block main_content %}{% endblock %}
        
        <div class=\"chat-popup\" id=\"myForm\">
            <div class=\"form-container\">
                <h1>Nous sommes à votre disposition !</h1>
                <div id=\"output\"></div>

                <div id=\"container\">
                    <input type=\"text\" id=\"input\" value=\"\" placeholder=\"Une question ?\">
                </div>

                <p>(Entrée pour valider)</p>
            </div>
        </div>

        <a class=\"open-button\"><i class=\"fas fa-comment-alt\"></i></a>
    </main>
    <script>
        \$(document).ready(function () {
            
            \$('.chat-popup').hide();
            \$('.open-button').click(function (event) {
                \$('.chat-popup').toggle(\"slow\");
            });
        });

        var question = '<h2>Quelle est votre problème ?</h2>';\t\t\t\t// first question

        var output = document.getElementById('output');\t\t\t\t// store id=\"output\" in output variable
        output.innerHTML = question;\t\t\t\t\t\t\t\t// ouput first question

        function bot() { 
            var input = document.getElementById(\"input\").value;
            console.log(input);

            keywords = [\"velo\", \"petit_budget\", \"agenda\", \"loisirs\", \"rencontres\", \"trains\", \"abonnement\", \"bus\", \"besoin_aide\", \"handicap\", \"crous\", \"urgence_log\", \"recherche_log\", \"jobs\", \"impot\", \"aide_log\", \"apl\", \"sexualite\"];
        
            if(input.includes(\"velo\")) {
                window.location = \"{{ path(\"list\", {keyword: \"velo\"}) }}\";
            }
            if(input.includes(\"budget\")) {
                window.location = \"{{ path(\"list\", {keyword: \"petit_budget\"}) }}\";
            }
            if(input.includes(\"agenda\")) {
                window.location = \"{{ path(\"list\", {keyword: \"agenda\"}) }}\";
            }
            if(input.includes(\"loisirs\")) {
                window.location = \"{{ path(\"list\", {keyword: \"loisirs\"}) }}\";
            }
            if(input.includes(\"rencontres\")) {
                window.location = \"{{ path(\"list\", {keyword: \"rencontres\"}) }}\";
            }   
            if(input.includes(\"trains\")) {
                window.location = \"{{ path(\"list\", {keyword: \"trains\"}) }}\";
            }   
            if(input.includes(\"abonnement\")) {
                window.location = \"{{ path(\"list\", {keyword: \"abonnement\"}) }}\";
            }
            if(input.includes(\"bus\")) {
                window.location = \"{{ path(\"list\", {keyword: \"bus\"}) }}\";
            }
            if(input.includes(\"besoin\")) {
                window.location = \"{{ path(\"list\", {keyword: \"besoin_aide\"}) }}\";
            }
            if(input.includes(\"handicap\")) {
                window.location = \"{{ path(\"list\", {keyword: \"handicap\"}) }}\";
            }
            if(input.includes(\"crous\")) {
                window.location = \"{{ path(\"list\", {keyword: \"crous\"}) }}\";
            }
            if(input.includes(\"urgence\")) {
                window.location = \"{{ path(\"list\", {keyword: \"urgence_log\"}) }}\";
            }
            if(input.includes(\"recherche\")) {
                window.location = \"{{ path(\"list\", {keyword: \"recherche_log\"}) }}\";
            }
            if(input.includes(\"jobs\")) {
                window.location = \"{{ path(\"list\", {keyword: \"jobs\"}) }}\";
            }
            if(input.includes(\"impot\")) {
                window.location = \"{{ path(\"list\", {keyword: \"impot\"}) }}\";
            }
            if(input.includes(\"aide\")) {
                window.location = \"{{ path(\"list\", {keyword: \"besoin_aide\"}) }}\";
            }
            if(input.includes(\"apl\")) {
                window.location = \"{{ path(\"list\", {keyword: \"apl\"}) }}\";
            }
            if(input.includes(\"sexualite\")) {
                window.location = \"{{ path(\"list\", {keyword: \"sexualite\"}) }}\";
            }
        }

        function timedQuestion() {
            output.innerHTML = question;
        }

        //push enter key (using jquery), to run bot function.
        \$(document).keypress(function(e) {
            if (e.which == 13) {
                bot();\t// run bot function when enter key pressed
                questionNum++;\t// increase questionNum count by 1
            }
        });
    </script>
{% endblock %}

{% block footer %}
    <footer>

    </footer>
{% endblock %}
", "layout.html.twig", "/root/docker/pingouin-du-web/apps/my-symfony-app/templates/layout.html.twig");
    }
}
