<?php

/* default/template/extension/quickcheckout/confirm.twig */
class __TwigTemplate_dca3e1d9af8c60e1bbf238bdc36d7a0381c5c00d9293dec4c6a20160b6af64f8 extends Twig_Template
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
        if ( !(isset($context["redirect"]) ? $context["redirect"] : null)) {
            echo " 
  ";
            // line 2
            if ((isset($context["confirmation_page"]) ? $context["confirmation_page"] : null)) {
                echo " 
\t<div class=\"table-responsive\">
\t  <table class=\"table table-bordered table-hover\">
\t\t<thead>
\t\t  <tr>
\t\t\t<td class=\"text-left\">";
                // line 7
                echo (isset($context["column_name"]) ? $context["column_name"] : null);
                echo "</td>
\t\t\t<td class=\"text-left\">";
                // line 8
                echo (isset($context["column_model"]) ? $context["column_model"] : null);
                echo "</td>
\t\t\t<td class=\"text-right\">";
                // line 9
                echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
                echo "</td>
\t\t\t<td class=\"text-right\">";
                // line 10
                echo (isset($context["column_price"]) ? $context["column_price"] : null);
                echo "</td>
\t\t\t<td class=\"text-right\">";
                // line 11
                echo (isset($context["column_total"]) ? $context["column_total"] : null);
                echo "</td>
\t\t  </tr>
\t\t</thead>
\t\t<tbody>
\t\t  ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    echo " 
\t\t  <tr>
\t\t\t<td class=\"text-left\"><a href=\"";
                    // line 17
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a>
\t\t\t  ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " 
\t\t\t  <br />
\t\t\t  &nbsp;<small>- ";
                        // line 20
                        echo $this->getAttribute($context["option"], "name", array());
                        echo ": ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small>
\t\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo " 
\t\t\t  ";
                    // line 22
                    if ($this->getAttribute($context["product"], "recurring", array())) {
                        echo " 
\t\t\t  <br />
\t\t\t  <span class=\"label label-info\">";
                        // line 24
                        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                        echo "</span> <small>";
                        echo $this->getAttribute($context["product"], "recurring", array());
                        echo "</small>
\t\t\t  ";
                    }
                    // line 25
                    echo "</td>
\t\t\t<td class=\"text-left\">";
                    // line 26
                    echo $this->getAttribute($context["product"], "model", array());
                    echo "</td>
\t\t\t<td class=\"text-right\">";
                    // line 27
                    echo $this->getAttribute($context["product"], "quantity", array());
                    echo "</td>
\t\t\t<td class=\"text-right\">";
                    // line 28
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</td>
\t\t\t<td class=\"text-right\">";
                    // line 29
                    echo $this->getAttribute($context["product"], "total", array());
                    echo "</td>
\t\t  </tr>
\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    echo " 
\t\t  <tr>
\t\t\t<td class=\"text-left\">";
                    // line 34
                    echo $this->getAttribute($context["voucher"], "description", array());
                    echo "</td>
\t\t\t<td class=\"text-left\"></td>
\t\t\t<td class=\"text-right\">1</td>
\t\t\t<td class=\"text-right\">";
                    // line 37
                    echo $this->getAttribute($context["voucher"], "amount", array());
                    echo "</td>
\t\t\t<td class=\"text-right\">";
                    // line 38
                    echo $this->getAttribute($context["voucher"], "amount", array());
                    echo "</td>
\t\t  </tr>
\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo " 
\t\t</tbody>
\t\t<tfoot>
\t\t  ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    echo " 
\t\t  <tr>
\t\t\t<td colspan=\"4\" class=\"text-right\"><strong>";
                    // line 45
                    echo $this->getAttribute($context["total"], "title", array());
                    echo ":</strong></td>
\t\t\t<td class=\"text-right\">";
                    // line 46
                    echo $this->getAttribute($context["total"], "text", array());
                    echo "</td>
\t\t  </tr>
\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo " 
\t\t</tfoot>
\t  </table>
\t</div>
  ";
            }
            // line 53
            echo "  <div class=\"payment\">";
            echo (isset($context["payment"]) ? $context["payment"] : null);
            echo "</div>
  <a class=\"btn btn-danger pull-left\" href=\"";
            // line 54
            echo (isset($context["back"]) ? $context["back"] : null);
            echo "\">";
            echo (isset($context["button_back"]) ? $context["button_back"] : null);
            echo "</a>
  
  <script type=\"text/javascript\"><!--
  ";
            // line 57
            if (((isset($context["payment_target"]) ? $context["payment_target"] : null) && (isset($context["auto_submit"]) ? $context["auto_submit"] : null))) {
                echo " 
  \$('.payment').find('";
                // line 58
                echo (isset($context["payment_target"]) ? $context["payment_target"] : null);
                echo "').trigger('click');
  
  setTimeout(function() {
\t  \$('#quickcheckoutconfirm').show();
\t  \$('#payment').show();
\t  \$('.fa-spinner').remove();
  }, 4000);
  ";
            }
            // line 65
            echo " 
  //--></script> 
";
        } else {
            // line 67
            echo "   
<script type=\"text/javascript\"><!--
location = '";
            // line 69
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "';
//--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 69,  215 => 67,  210 => 65,  199 => 58,  195 => 57,  187 => 54,  182 => 53,  175 => 48,  166 => 46,  162 => 45,  155 => 43,  150 => 40,  141 => 38,  137 => 37,  131 => 34,  123 => 32,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  99 => 25,  92 => 24,  87 => 22,  84 => 21,  74 => 20,  67 => 18,  61 => 17,  54 => 15,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  23 => 2,  19 => 1,);
    }
}
/* {% if not redirect %} */
/*   {% if confirmation_page %} */
/* 	<div class="table-responsive">*/
/* 	  <table class="table table-bordered table-hover">*/
/* 		<thead>*/
/* 		  <tr>*/
/* 			<td class="text-left">{{ column_name }}</td>*/
/* 			<td class="text-left">{{ column_model }}</td>*/
/* 			<td class="text-right">{{ column_quantity }}</td>*/
/* 			<td class="text-right">{{ column_price }}</td>*/
/* 			<td class="text-right">{{ column_total }}</td>*/
/* 		  </tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		  {% for product in products %} */
/* 		  <tr>*/
/* 			<td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a>*/
/* 			  {% for option in product.option %} */
/* 			  <br />*/
/* 			  &nbsp;<small>- {{ option.name }}: {{ option.value }}</small>*/
/* 			  {% endfor %} */
/* 			  {% if product.recurring %} */
/* 			  <br />*/
/* 			  <span class="label label-info">{{ text_recurring }}</span> <small>{{ product.recurring }}</small>*/
/* 			  {% endif %}</td>*/
/* 			<td class="text-left">{{ product.model }}</td>*/
/* 			<td class="text-right">{{ product.quantity }}</td>*/
/* 			<td class="text-right">{{ product.price }}</td>*/
/* 			<td class="text-right">{{ product.total }}</td>*/
/* 		  </tr>*/
/* 		  {% endfor %}*/
/* 		  {% for voucher in vouchers %} */
/* 		  <tr>*/
/* 			<td class="text-left">{{ voucher.description }}</td>*/
/* 			<td class="text-left"></td>*/
/* 			<td class="text-right">1</td>*/
/* 			<td class="text-right">{{ voucher.amount }}</td>*/
/* 			<td class="text-right">{{ voucher.amount }}</td>*/
/* 		  </tr>*/
/* 		  {% endfor %} */
/* 		</tbody>*/
/* 		<tfoot>*/
/* 		  {% for total in totals %} */
/* 		  <tr>*/
/* 			<td colspan="4" class="text-right"><strong>{{ total.title }}:</strong></td>*/
/* 			<td class="text-right">{{ total.text }}</td>*/
/* 		  </tr>*/
/* 		  {% endfor %} */
/* 		</tfoot>*/
/* 	  </table>*/
/* 	</div>*/
/*   {% endif %}*/
/*   <div class="payment">{{ payment }}</div>*/
/*   <a class="btn btn-danger pull-left" href="{{ back }}">{{ button_back }}</a>*/
/*   */
/*   <script type="text/javascript"><!--*/
/*   {% if payment_target  and  auto_submit %} */
/*   $('.payment').find('{{ payment_target }}').trigger('click');*/
/*   */
/*   setTimeout(function() {*/
/* 	  $('#quickcheckoutconfirm').show();*/
/* 	  $('#payment').show();*/
/* 	  $('.fa-spinner').remove();*/
/*   }, 4000);*/
/*   {% endif %} */
/*   //--></script> */
/* {% else %}   */
/* <script type="text/javascript"><!--*/
/* location = '{{ redirect }}';*/
/* //--></script>*/
/* {% endif %}*/
