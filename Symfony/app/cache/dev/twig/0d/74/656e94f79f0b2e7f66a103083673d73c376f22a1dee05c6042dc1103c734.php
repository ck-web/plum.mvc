<?php

/* HelloFormationBundle:Module:liste.html.twig */
class __TwigTemplate_0d74656e94f79f0b2e7f66a103083673d73c376f22a1dee05c6042dc1103c734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
  <head>
     ";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "  </head>
  <body>
  <h1>Liste des modules</h1>
  <table>
\t<tr>
\t\t<th>Nom module</th>
\t\t<th>Date début</th>
\t\t<th>Durée</th>
\t</tr>
\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "\t<tr>
\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "nomM"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "dateDebut"), "d/m/Y", "Europe/Paris"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align:center\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "duree"), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  </table>
  </body>
</html>";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/helloformation/css/formation.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
     ";
    }

    public function getTemplateName()
    {
        return "HelloFormationBundle:Module:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 4,  67 => 3,  61 => 22,  52 => 19,  48 => 18,  44 => 17,  41 => 16,  37 => 15,  26 => 6,  24 => 3,  20 => 1,);
    }
}
