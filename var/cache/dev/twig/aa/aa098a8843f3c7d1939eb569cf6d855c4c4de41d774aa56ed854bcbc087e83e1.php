<?php

/* specialty/profile.html.twig */
class __TwigTemplate_73ea8910b8df1d70c3722ec0dd55e3b28e292641193f8c296d4fbe2ecbd8405e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "specialty/profile.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "specialty/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "specialty/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"specialty-heading\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["specialty"]) || array_key_exists("specialty", $context) ? $context["specialty"] : (function () { throw new Twig_Error_Runtime('Variable "specialty" does not exist.', 4, $this->source); })()), "name", array()), "html", null, true);
        echo " Specialty Page</h1>
    <h3 class=\"classBook-link\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("specialty_classBook", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["specialty"]) || array_key_exists("specialty", $context) ? $context["specialty"] : (function () { throw new Twig_Error_Runtime('Variable "specialty" does not exist.', 5, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Specialty Class
            book</a></h3>
    <section class=\"spec-main\">
        <section class=\"students\">
            <h2>Students</h2>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new Twig_Error_Runtime('Variable "students" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 11
            echo "                <p>
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_profile", array("id" => twig_get_attribute($this->env, $this->source, $context["student"], "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 13
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["student"], "firstName", array()) . " ") . twig_get_attribute($this->env, $this->source, $context["student"], "lastName", array())), "html", null, true);
            echo "
                    </a>
                </p>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "                <p>No students in this specialty</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </section>
        <section class=\"subjects\">
            <h2>Subjects</h2>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["specialty"]) || array_key_exists("specialty", $context) ? $context["specialty"] : (function () { throw new Twig_Error_Runtime('Variable "specialty" does not exist.', 22, $this->source); })()), "subjects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 23
            echo "                <p>
                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "name", array()), "html", null, true);
            echo "
                </p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </section>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "specialty/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  106 => 24,  103 => 23,  99 => 22,  94 => 19,  87 => 17,  78 => 13,  74 => 12,  71 => 11,  66 => 10,  58 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 class=\"specialty-heading\">{{ specialty.name }} Specialty Page</h1>
    <h3 class=\"classBook-link\"><a href=\"{{ path('specialty_classBook', {'id': specialty.id}) }}\">Specialty Class
            book</a></h3>
    <section class=\"spec-main\">
        <section class=\"students\">
            <h2>Students</h2>
            {% for student in students %}
                <p>
                    <a href=\"{{ path('student_profile', {'id': student.id}) }}\">
                        {{ student.firstName ~ ' ' ~ student.lastName }}
                    </a>
                </p>
            {% else %}
                <p>No students in this specialty</p>
            {% endfor %}
        </section>
        <section class=\"subjects\">
            <h2>Subjects</h2>
            {% for subject in specialty.subjects %}
                <p>
                    {{ subject.name }}
                </p>
            {% endfor %}
        </section>
    </section>
{% endblock %}

", "specialty/profile.html.twig", "D:\\Projects\\SIMS\\SIMS\\templates\\specialty\\profile.html.twig");
    }
}
