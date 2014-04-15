<?php

/* HelloFormationBundle:Stagiaire:liste.html.twig */
class __TwigTemplate_735bc62db29126d7dcbff75b4ebb8b3bfa76284f207084d4aa9e15cfed805333 extends Twig_Template
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
  <h1>Liste des stagiaires</h1>
  <table>
\t<tr>
\t\t<th>Nom</th>
\t\t<th>Prenom</th>
\t\t<th>Age</th>
\t\t<th>Module</th>
\t</tr>
\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stagiaires"]) ? $context["stagiaires"] : $this->getContext($context, "stagiaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "\t<tr>
\t\t<td style=\"text-align:center\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "nom"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align:center\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "prenom"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align:center\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "age"), "html", null, true);
            echo "</td>
\t\t<td style=\"text-align:center\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "module"), "nomM"), "html", null, true);
            echo "</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
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
        return "HelloFormationBundle:Stagiaire:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 4,  72 => 3,  66 => 24,  57 => 21,  53 => 20,  49 => 19,  45 => 18,  42 => 17,  38 => 16,  26 => 6,  24 => 3,  20 => 1,);
    }
}
