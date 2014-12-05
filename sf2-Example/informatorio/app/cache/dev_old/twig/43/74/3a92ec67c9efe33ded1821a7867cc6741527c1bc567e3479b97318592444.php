<?php

/* AcmeDemoBundle:Demo:informatorio.html.twig */
class __TwigTemplate_43743a92ec67c9efe33ded1821a7867cc6741527c1bc567e3479b97318592444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::informatorioBase.html.twig");

        $this->blocks = array(
            'informatorio' => array($this, 'block_informatorio'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::informatorioBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_informatorio($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    <h1>Hello <b>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</b></h1>
    ";
        // line 6
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeDemoBundle:Demo:component1"));
        echo "
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
        return array (  40 => 6,  35 => 5,  33 => 4,  30 => 3,  25 => 9,);
    }
}
