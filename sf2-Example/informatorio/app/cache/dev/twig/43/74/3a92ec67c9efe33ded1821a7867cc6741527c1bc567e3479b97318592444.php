<?php

/* AcmeDemoBundle:Demo:informatorio.html.twig */
class __TwigTemplate_43743a92ec67c9efe33ded1821a7867cc6741527c1bc567e3479b97318592444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::informatorioBase.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'informatorio' => array($this, 'block_informatorio'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::informatorioBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_informatorio($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("informatorio", $context, $blocks);
        echo "
    <h1>Hello <b>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</b></h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:informatorio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 6,  37 => 5,  31 => 3,  26 => 10,);
    }
}
