<?php

/* HelloFormationBundle:Default:index.html.twig */
class __TwigTemplate_a86dbff88a2e59472e71349a5adc0cabd4d8ae441e51bbf48aea96043c9984aa extends Twig_Template
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
    <h1>Accueil du Bundle HelloFormationBundle</h1>
    ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "HelloFormationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
