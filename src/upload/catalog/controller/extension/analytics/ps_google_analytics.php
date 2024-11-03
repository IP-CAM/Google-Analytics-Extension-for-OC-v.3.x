<?php
class ControllerExtensionAnalyticsPsGoogleAnalytics extends Controller
{
    public function index()
    {
        if (!$this->config->get('analytics_ps_google_analytics_status')) {
            return '';
        }

        $google_tag_id = $this->config->get('analytics_ps_google_analytics_google_tag_id');

        return <<<HTML
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={$google_tag_id}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }

            gtag('js', new Date());
            gtag('config', '{$google_tag_id}');
        </script>
        HTML;
    }
}
