<?php

/* HelloFormationBundle:Module:form.html.twig */
class __TwigTemplate_883446603821481090cc146acb7f9d7f741efbdb6231f4c8985b83b921fbec98 extends Twig_Template
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
  <h1>Formulaire Module</h1>
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "HelloFormationBundle:Module:form.html.twig";
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
