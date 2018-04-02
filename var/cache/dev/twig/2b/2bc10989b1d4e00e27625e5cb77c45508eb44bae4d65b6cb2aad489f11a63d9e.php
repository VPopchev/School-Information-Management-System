<?php

/* User/studentProfile.html.twig */
class __TwigTemplate_0fc9134fb84ce5fbd03e20f04e87e5dedf09a58a551443ed73f04f22e51581cb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "User/studentProfile.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/studentProfile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "User/studentProfile.html.twig"));

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
        echo "<h1>";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 4, $this->source); })()), "firstName", array()) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 4, $this->source); })()), "lastName", array())), "html", null, true);
        echo "</h1>
    <h2>Specialty: ";
        // line 5
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "specialty", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["student"] ?? null), "specialty", array(), "any", false, true), "name", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</h2>
    ";
        // line 6
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 6, $this->source); })()), "specialty", array()))) {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("set_specialty", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 7, $this->source); })()), "id", array()))), "html", null, true);
            echo "\">Set Specialty</a>
    ";
        }
        // line 9
        echo "    <section class=\"marks\">
        <h2>Marks</h2>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 11, $this->source); })()), "specialty", array()), "subjects", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 12
            echo "            <p>
                <span class=\"subj-name\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "name", array()), "html", null, true);
            echo "</span>:
                ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 14, $this->source); })()), "subjectMarks", array(0 => $context["subject"]), "method"), "html", null, true);
            echo "
                <span class=\"sub-avg\">Average:
                ";
            // line 16
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 16, $this->source); })()), "averageSuccessBySubject", array(0 => $context["subject"]), "method"), 2), "html", null, true);
            echo "</span>
            </p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        <hr>
        <p class=\"avg-success\">Average Success ";
        // line 20
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 20, $this->source); })()), "averageSuccess", array()), 2), "html", null, true);
        echo "</p>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_mark", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new Twig_Error_Runtime('Variable "student" does not exist.', 21, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Add Marks</a>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User/studentProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 21,  102 => 20,  99 => 19,  90 => 16,  85 => 14,  81 => 13,  78 => 12,  74 => 11,  70 => 9,  64 => 7,  62 => 6,  58 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<h1>{{ student.firstName ~ ' ' ~ student.lastName }}</h1>
    <h2>Specialty: {{ student.specialty.name|default('n/a') }}</h2>
    {% if student.specialty is null %}
        <a href=\"{{ path('set_specialty', {'id': student.id}) }}\">Set Specialty</a>
    {% endif %}
    <section class=\"marks\">
        <h2>Marks</h2>
        {% for subject in student.specialty.subjects %}
            <p>
                <span class=\"subj-name\">{{ subject.name }}</span>:
                {{ student.subjectMarks(subject) }}
                <span class=\"sub-avg\">Average:
                {{ student.averageSuccessBySubject(subject)|number_format(2) }}</span>
            </p>
        {% endfor %}
        <hr>
        <p class=\"avg-success\">Average Success {{ student.averageSuccess|number_format(2) }}</p>
        <a href=\"{{ path('new_mark', {'id': student.id}) }}\">Add Marks</a>
    </section>
{% endblock %}

", "User/studentProfile.html.twig", "D:\\Projects\\SIMS\\SIMS\\templates\\User\\studentProfile.html.twig");
    }
}
