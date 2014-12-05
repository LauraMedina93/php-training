<?php

/* AcmeDemoBundle::informatorioBase.html.twig */
class __TwigTemplate_28ed24bef8742a7d235bc0d550e40836054fd20c50262272919a188bc222d553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'informatorio' => array($this, 'block_informatorio'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        
    </head>
    <body>
        ";
        // line 6
        $this->displayBlock('informatorio', $context, $blocks);
        // line 7
        echo "    </body>
    
</html>";
    }

    // line 6
    public function block_informatorio($context, array $blocks = array())
    {
        echo "<h1>Soy tu Padre</h1>";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::informatorioBase.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 7,  27 => 6,  20 => 1,);
    }
}
