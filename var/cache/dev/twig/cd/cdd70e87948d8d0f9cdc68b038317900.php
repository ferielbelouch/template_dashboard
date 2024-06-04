<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* includes/sidebar.html.twig */
class __TwigTemplate_f7c59df0765bc182d932f1b364a06b11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/sidebar.html.twig"));

        // line 1
        yield "<nav class=\"pc-sidebar\">
  <div class=\"navbar-wrapper\">
    <div class=\"m-header\">
      <a href=\"index.html\" class=\"b-brand text-primary\">
        <!-- ========   Change your logo from here   ============ -->
        <img src=\"\" alt=\"logo image\" class=\"logo-lg\" />
        <span class=\"badge bg-brand-color-2 rounded-pill ms-2 theme-version\">v1.0</span>
      </a>
    </div>
    <div class=\"navbar-content\">
      <ul class=\"pc-navbar\">
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-gauge\"></i>
            </span>
            <span class=\"pc-mtext\">Dashboard</span>
          </a>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_operation");
        yield "\" class=\"pc-link\"
            ><span class=\"pc-micon\"> <i class=\"ph-duotone ph-layout\"></i></span><span class=\"pc-mtext\">Operations</span>
          </a>
        </li>
        ";
        // line 33
        yield "        <li class=\"pc-item\">
          <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-identification-card\"></i>
            </span>
            <span class=\"pc-mtext\">User</span>
          </a>
        </li>
        ";
        // line 49
        yield "        ";
        // line 57
        yield "        ";
        // line 249
        yield "
        ";
        // line 354
        yield "        ";
        // line 498
        yield "        ";
        // line 663
        yield "
      </ul>
    </div>
  </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "includes/sidebar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  100 => 663,  98 => 498,  96 => 354,  93 => 249,  91 => 57,  89 => 49,  79 => 34,  76 => 33,  69 => 21,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"pc-sidebar\">
  <div class=\"navbar-wrapper\">
    <div class=\"m-header\">
      <a href=\"index.html\" class=\"b-brand text-primary\">
        <!-- ========   Change your logo from here   ============ -->
        <img src=\"\" alt=\"logo image\" class=\"logo-lg\" />
        <span class=\"badge bg-brand-color-2 rounded-pill ms-2 theme-version\">v1.0</span>
      </a>
    </div>
    <div class=\"navbar-content\">
      <ul class=\"pc-navbar\">
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"{{ path('app_home')}}\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-gauge\"></i>
            </span>
            <span class=\"pc-mtext\">Dashboard</span>
          </a>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"{{ path('app_operation')}}\" class=\"pc-link\"
            ><span class=\"pc-micon\"> <i class=\"ph-duotone ph-layout\"></i></span><span class=\"pc-mtext\">Operations</span>
          </a>
        </li>
        {# <li class=\"pc-item\">
          <a href=\"https://html.phoenixcoded.net/light-able/bootstrap/widget/w_statistics.html\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-projector-screen-chart\"></i>
            </span>
            <span class=\"pc-mtext\">Statistics</span>
          </a>
        </li> #}
        <li class=\"pc-item\">
          <a href=\"{{path('app_user_index')}}\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-identification-card\"></i>
            </span>
            <span class=\"pc-mtext\">User</span>
          </a>
        </li>
        {# <li class=\"pc-item\">
          <a href=\"https://html.phoenixcoded.net/light-able/bootstrap/widget/w_data.html\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-database\"></i>
            </span>
            <span class=\"pc-mtext\">Data</span>
          </a>
        </li> #}
        {# <li class=\"pc-item\">
          <a href=\"https://html.phoenixcoded.net/light-able/bootstrap/widget/w_chart.html\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-chart-pie\"></i>
            </span>
            <span class=\"pc-mtext\">Chart</span></a
          >
        </li> #}
        {# <li class=\"pc-item pc-caption\">
          <label>Application</label>
          <i class=\"ph-duotone ph-buildings\"></i>
        </li>
        <li class=\"pc-item\">
          <a href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/calendar.html\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-calendar-blank\"></i>
            </span>
            <span class=\"pc-mtext\">Calendar</span></a
          >
        </li>
        <li class=\"pc-item\">
          <a href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/chat.html\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-chats-circle\"></i>
            </span>
            <span class=\"pc-mtext\">Chat</span></a
          >
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-image\"></i>
            </span>
            <span class=\"pc-mtext\">Gallery</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/gallery-grid.html\">Grid</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/gallery-masonry.html\">Masonry</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-shopping-cart\"></i>
            </span>
            <span class=\"pc-mtext\">E-commerce</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/ecom_product.html\">Product</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/ecom_product-details.html\">Product details</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/ecom_product-list.html\">Product List</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/ecom_product-add.html\">Add New Product</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/ecom_checkout.html\">Checkout</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\"
            ><span class=\"pc-micon\"><i class=\"ph-duotone ph-lifebuoy\"></i></span><span class=\"pc-mtext\">Helpdesk</span
            ><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/helpdesk-dashboard.html\">Dashboard</a></li>
            <li class=\"pc-item pc-hasmenu\">
              <a class=\"pc-link\" href=\"#!\"
                >Ticket<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/helpdesk-create-ticket.html\">Create</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/helpdesk-ticket.html\">List</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/helpdesk-ticket-details.html\">Details</a></li>
              </ul>
            </li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/helpdesk-customer.html\">Customer</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-newspaper\"></i>
            </span>
            <span class=\"pc-mtext\">Invoice 1</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/invoice-list.html\">Invoice List</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/invoice-create.html\">Create</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/invoice-view.html\">Preview</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\"
            ><span class=\"pc-micon\"><i class=\"ph-duotone ph-newspaper\"></i></span><span class=\"pc-mtext\">Invoice 2</span
            ><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/invoice-dashboard.html\">Dashboard</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/invoice-create.html\">Create</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/invoice-view.html\">Details</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/invoice-list.html\">List</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/invoice-edit.html\">Edit</a></li>
          </ul>
        </li>
        <li class=\"pc-item\">
          <a href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/mail.html\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-envelope-open\"></i>
            </span>
            <span class=\"pc-mtext\">Mail</span></a
          >
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-identification-badge\"></i>
            </span>
            <span class=\"pc-mtext\">Membership</span>
            <span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span>
          </a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/membership-dashboard.html\">Dashboard</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/membership-list.html\">List</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/membership-pricing.html\">Pricing</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/membership-setting.html\">Setting</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-books\"></i>
            </span>
            <span class=\"pc-mtext\">Online Courses</span>
            <span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span>
          </a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-dashboard.html\">Dashboard</a></li>
            <li class=\"pc-item pc-hasmenu\">
              <a class=\"pc-link\" href=\"#!\"
                >Teacher<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-teacher-list.html\">List</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-teacher-apply.html\">Apply</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-teacher-add.html\">Add</a></li>
              </ul>
            </li>
            <li class=\"pc-item pc-hasmenu\">
              <a class=\"pc-link\" href=\"#!\"
                >Student<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-student-list.html\">list</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-student-Apply.html\">Apply</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-student-add.html\">Add</a></li>
              </ul>
            </li>
            <li class=\"pc-item pc-hasmenu\">
              <a class=\"pc-link\" href=\"#!\"
                >Courses<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-course-view.html\">View</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-course-add.html\">Add</a></li>
              </ul>
            </li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-pricing.html\">Pricing</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-site.html\">Site</a></li>
            <li class=\"pc-item pc-hasmenu\">
              <a class=\"pc-link\" href=\"#!\"
                >Setting<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-setting-payment.html\">Payment</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-setting-pricing.html\">Pricing</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/admins/course-setting-notifications.html\">Notifications</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class=\"pc-item\">
          <a href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/plans.html\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-currency-circle-dollar\"></i>
            </span>
            <span class=\"pc-mtext\">Plans</span></a
          >
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-user-circle\"></i>
            </span>
            <span class=\"pc-mtext\">Users</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/account-profile.html\">Account Profile</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/social-media.html\">Social media</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/user-card.html\">User Card</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/user-list.html\">User List</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/application/team.html\">Team</a></li>
          </ul>
        </li> #}

        {# <li class=\"pc-item pc-caption\">
          <label>Pages</label>
          <i class=\"ph-duotone ph-devices\"></i>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-shield-checkered\"></i>
            </span>
            <span class=\"pc-mtext\">Authentication</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item pc-hasmenu\">
              <a href=\"#!\" class=\"pc-link\"
                >Authentication 1<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/login-v1.html\">Login</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/register-v1.html\">Register</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/forgot-password-v1.html\">Forgot Password</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/reset-password-v1.html\">reset password</a> </li>
                <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/code-verification-v1.html\">code verification</a></li>
              </ul>
            </li>
            <li class=\"pc-item pc-hasmenu\">
              <a href=\"#!\" class=\"pc-link\"
                >Authentication 2<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/login-v2.html\">Login</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/register-v2.html\">Register</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/forgot-password-v2.html\">Forgot password</a> </li>
                <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/reset-password-v2.html\">reset password</a> </li>
                <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/code-verification-v2.html\">code verification</a></li>
              </ul>
            </li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/login-modal.html\">Login Modal</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-wrench\"></i>
            </span>
            <span class=\"pc-mtext\">Maintenance</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span>
          </a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/error-404.html\">Error 404</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/connection-lost.html\">Connection lost</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/under-construction.html\">Under Construction</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" target=\"_blank\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/coming-soon.html\">Coming soon</a></li>
          </ul>
        </li>
        <li class=\"pc-item\"
          ><a href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/contact-us.html\" class=\"pc-link\"
            ><span class=\"pc-micon\"> <i class=\"ph-duotone ph-target\"></i> </span><span class=\"pc-mtext\">Contact Us</span></a
          >
        </li>
        <li class=\"pc-item\"
          ><a href=\"https://html.phoenixcoded.net/light-able/bootstrap/index.html\" class=\"pc-link\" target=\"_blank\"
            ><span class=\"pc-micon\"> <i class=\"ph-duotone ph-rocket\"></i> </span>
            <span class=\"pc-mtext pc-icon-link\">Landing <i class=\"ti ti-link text-primary f-14\"></i></span>
          </a>
        </li>
        <li class=\"pc-item\"
          ><a href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/loading.html\" class=\"pc-link\"
            ><span class=\"pc-micon\"> <i class=\"ph-duotone ph-fan\"></i> </span><span class=\"pc-mtext\">Loading</span></a
          >
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-magnifying-glass\"></i>
            </span>
            <span class=\"pc-mtext\">Search</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/search-page.html\">Search Page</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/contact-search.html\">Contact Search</a></li>
          </ul>
        </li>
        <li class=\"pc-item\">
          <a href=\"https://html.phoenixcoded.net/light-able/bootstrap/pages/settings.html\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-globe\"></i>
            </span>
            <span class=\"pc-mtext\">Site Settings</span>
          </a>
        </li>
        <li class=\"pc-item pc-caption\">
          <label>UI Components</label>
          <i class=\"ph-duotone ph-compass-tool\"></i>
        </li>
        <li class=\"pc-item\">
          <a href=\"https://html.phoenixcoded.net/light-able/bootstrap/elements/bc_alert.html\" class=\"pc-link\" target=\"_blank\"
            ><span class=\"pc-micon\"> <i class=\"ph-duotone ph-compass-tool\"></i></span>
            <span class=\"pc-mtext pc-icon-link\">Components <i class=\"ti ti-link text-primary f-14\"></i></span>
          </a>
        </li>
        <li class=\"pc-item\">
          <a href=\"https://html.phoenixcoded.net/light-able/bootstrap/elements/animation.html\" class=\"pc-link\">
            <span class=\"pc-micon\"> <i class=\"ph-duotone ph-flower\"></i> </span><span class=\"pc-mtext\">Animation</span></a
          >
        </li> #}
        {# <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\"
            ><span class=\"pc-micon\"> <i class=\"ph-duotone ph-flower-lotus\"></i></span><span class=\"pc-mtext\">Icons</span
            ><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/elements/icon-feather.html\">Feather</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/elements/icon-fontawesome.html\">Font Awesome 5</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/elements/icon-material.html\">Material</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/elements/icon-tabler.html\">Tabler</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/elements/icon-phosphor.html\">Phosphor</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/elements/icon-custom.html\">Custom</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-caption\">
          <label>Forms</label>
          <i class=\"ph-duotone ph-textbox\"></i>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-textbox\"></i>
            </span>
            <span class=\"pc-mtext\">Forms Elements</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form_elements.html\">Form Basic</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form_floating.html\">Form Floating</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_basic.html\">Form Options</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_input_group.html\">Input Groups</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_checkbox.html\">Checkbox</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_radio.html\">Radio</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_switch.html\">Switch</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_megaoption.html\">Mega option</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-plug-charging\"></i>
            </span>
            <span class=\"pc-mtext\">Forms Plugins</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item pc-hasmenu\">
              <a class=\"pc-link\" href=\"#\"
                >Date<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_datepicker.html\">Datepicker</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_daterangepicker.html\">Date Range Picker</a> </li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_timepicker.html\">Timepicker</a></li>
              </ul>
            </li>
            <li class=\"pc-item pc-hasmenu\">
              <a class=\"pc-link\" href=\"#\"
                >Select<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_choices.html\">Choices js</a></li>
              </ul>
            </li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_rating.html\">Rating</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_recaptcha.html\">Google reCaptcha</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_inputmask.html\">Input Masks</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_clipboard.html\">Clipboard</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_nouislider.html\">Nouislider</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_switchjs.html\">Bootstrap Switch</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_typeahead.html\">Typeahead</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-pen-nib\"></i>
            </span>
            <span class=\"pc-mtext\">Text Editors</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_tinymce.html\">Tinymce</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_quill.html\">Quill</a></li>
            <li class=\"pc-item pc-hasmenu\">
              <a class=\"pc-link\" href=\"#\"
                >CK editor<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/editor-classic.html\">classic</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/editor-document.html\">Document</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/editor-inline.html\">Inline</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/editor-balloon.html\">Balloon</a></li>
              </ul>
            </li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_markdown.html\">Markdown</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-windows-logo\"></i>
            </span>
            <span class=\"pc-mtext\">Form Layouts</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_lay-default.html\">Layouts</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_lay-multicolumn.html\">Multicolumn</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_lay-actionbars.html\">Actionbars</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_lay-stickyactionbars.html\">Sticky Action bars</a> </li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-cloud-arrow-up\"></i>
            </span>
            <span class=\"pc-mtext\">File upload</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/file-upload.html\">Dropzone</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_flu-uppy.html\">Uppy</a></li>
          </ul>
        </li>
        <li class=\"pc-item\">
          <a href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form2_wizard.html\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-tabs\"></i>
            </span>
            <span class=\"pc-mtext\">wizard</span></a
          >
        </li>
        <li class=\"pc-item\">
          <a href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/form-validation.html\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-password\"></i>
            </span>
            <span class=\"pc-mtext\">Form Validation</span></a
          >
        </li>
        <li class=\"pc-item\"
          ><a href=\"https://html.phoenixcoded.net/light-able/bootstrap/forms/image_crop.html\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-crop\"></i>
            </span>
            <span class=\"pc-mtext\">Image cropper</span></a>
        </li> #}
        {# <li class=\"pc-item pc-caption\">
          <label>table</label>
          <i class=\"ph-duotone ph-table\"></i>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-table\"></i>
            </span>
            <span class=\"pc-mtext\">Bootstrap Table</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_bootstrap.html\">Basic table</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_sizing.html\">Sizing table</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_border.html\">Border table</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_styling.html\">Styling table</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-grid-nine\"></i>
            </span>
            <span class=\"pc-mtext\">Vanilla Table</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_dt-simple.html\">Basic initialization</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_dt-dynamic-import.html\">Dynamic Import</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_dt-render-column-cells.html\">Render Column Cells</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_dt-column-manipulation.html\">Column Manipulation</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_dt-datetime-sorting.html\">Datetime Sorting</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_dt-methods.html\">Methods</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_dt-add-rows.html\">Add Rows</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_dt-fetch-api.html\">Fetch API</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_dt-filters.html\">Filters</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/tbl_dt-export.html\">Export</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-text-columns\"></i>
            </span>
            <span class=\"pc-mtext\">Data table</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_advance.html\">Advance initialization</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_styling.html\">Styling</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_api.html\">API</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_plugin.html\">Plug-in</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_sources.html\">Data sources</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-wall\"></i>
            </span>
            <span class=\"pc-mtext\">DT extensions</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_ext_autofill.html\">Autofill</a></li>
            <li class=\"pc-item pc-hasmenu\">
              <a href=\"#!\" class=\"pc-link\"
                >Button<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_ext_basic_buttons.html\">Basic button</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_ext_export_buttons.html\">Data export</a></li>
              </ul>
            </li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_ext_col_reorder.html\">Col reorder</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_ext_fixed_columns.html\">Fixed columns</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_ext_fixed_header.html\">Fixed header</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_ext_key_table.html\">Key table</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_ext_responsive.html\">Responsive</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_ext_row_reorder.html\">Row reorder</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_ext_scroller.html\">Scroller</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/table/dt_ext_select.html\">Select table</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-caption\">
          <label>Charts &amp; Maps</label>
          <i class=\"ph-duotone ph-chart-pie-slice\"></i>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-chart-donut\"></i>
            </span>
            <span class=\"pc-mtext\">Charts</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/chart/chart-apex.html\">Apex Chart</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/chart/chart-peity.html\">Peity Chart</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-map-trifold\"></i>
            </span>
            <span class=\"pc-mtext\">Maps</span><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/chart/map-vector.html\">Vector Map</a></li>
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"https://html.phoenixcoded.net/light-able/bootstrap/chart/map-gmap.html\">Gmaps</a></li>
          </ul>
        </li>
        <li class=\"pc-item pc-caption\">
          <label>Other</label>
          <i class=\"ph-duotone ph-suitcase\"></i>
        </li>
        <li class=\"pc-item pc-hasmenu\">
          <a href=\"#!\" class=\"pc-link\"
            ><span class=\"pc-micon\"> <i class=\"ph-duotone ph-tree-structure\"></i> </span><span class=\"pc-mtext\">Menu levels</span
            ><span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
          ></a>
          <ul class=\"pc-submenu\">
            <li class=\"pc-item\"><a class=\"pc-link\" href=\"#!\">Level 2.1</a></li>
            <li class=\"pc-item pc-hasmenu\">
              <a href=\"#!\" class=\"pc-link\"
                >Level 2.2<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"#!\">Level 3.1</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"#!\">Level 3.2</a></li>
                <li class=\"pc-item pc-hasmenu\">
                  <a href=\"#!\" class=\"pc-link\"
                    >Level 3.3<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
                  ></a>
                  <ul class=\"pc-submenu\">
                    <li class=\"pc-item\"><a class=\"pc-link\" href=\"#!\">Level 4.1</a></li>
                    <li class=\"pc-item\"><a class=\"pc-link\" href=\"#!\">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class=\"pc-item pc-hasmenu\">
              <a href=\"#!\" class=\"pc-link\"
                >Level 2.3<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
              ></a>
              <ul class=\"pc-submenu\">
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"#!\">Level 3.1</a></li>
                <li class=\"pc-item\"><a class=\"pc-link\" href=\"#!\">Level 3.2</a></li>
                <li class=\"pc-item pc-hasmenu\">
                  <a href=\"#!\" class=\"pc-link\"
                    >Level 3.3<span class=\"pc-arrow\"><i data-feather=\"chevron-right\"></i></span
                  ></a>
                  <ul class=\"pc-submenu\">
                    <li class=\"pc-item\"><a class=\"pc-link\" href=\"#!\">Level 4.1</a></li>
                    <li class=\"pc-item\"><a class=\"pc-link\" href=\"#!\">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class=\"pc-item\"
          ><a href=\"https://html.phoenixcoded.net/light-able/bootstrap/other/sample-page.html\" class=\"pc-link\">
            <span class=\"pc-micon\">
              <i class=\"ph-duotone ph-desktop\"></i>
            </span>
            <span class=\"pc-mtext\">Sample page</span></a>
        </li> #}

      </ul>
    </div>
  </div>
</nav>", "includes/sidebar.html.twig", "/Users/hantour/Documents/FERIEL/template_dashboard/templates/includes/sidebar.html.twig");
    }
}
