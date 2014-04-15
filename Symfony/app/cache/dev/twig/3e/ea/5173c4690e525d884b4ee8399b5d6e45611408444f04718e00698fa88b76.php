<?php

/* HelloFormationBundle:Module:info.html.twig */
class __TwigTemplate_3eea5173c4690e525d884b4ee8399b5d6e45611408444f04718e00698fa88b76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
  <body>
  <h1>Information sur le module id=";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>
  <table border=0>
\t<tr>
\t\t<td>Nom module:</td><td>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["nomM"]) ? $context["nomM"] : $this->getContext($context, "nomM")), "html", null, true);
        echo "
\t</tr>
\t<tr>
\t\t<td>Date début:</td><td>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["dateDebut"]) ? $context["dateDebut"] : $this->getContext($context, "dateDebut")), "html", null, true);
        echo "
\t</tr>
\t<tr>
\t\t<td>Durée:</td><td>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["duree"]) ? $context["duree"] : $this->getContext($context, "duree")), "html", null, true);
        echo "
\t</tr>
  </table>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "HelloFormationBundle:Module:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  35 => 9,  29 => 6,  23 => 3,  19 => 1,);
    }
}
