<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['text', 'form'];
    protected function connect() {
        return $db = \Config\Database::connect();
    }

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    public function alert($type = 'danger', $title = 'Whoops!', $message = 'Please check the fields.', $dismissable = TRUE)
    {
        if ($type == 'success') {
            $fa = 'check-circle';
        } else {
            $fa = 'exclamation-triangle';
        }

        $dismissable = ($dismissable == TRUE ? ' alert-dismissable' : '');

        $msg = '<div class="alert alert-' . $type . $dismissable . ' fade show text-center">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong><i class="fa fa-' . $fa . ' fa-lg fa-fw"></i> ' . $title . '</strong> &nbsp;' . $message . '
				</div>';

        $type = $type == 'danger' ? 'error' : $type;

        $ndata    =    [
            'atp'    =>    $type,
            'atlt'    =>    $title,
            'amsg'    =>    $message,
            'msg'    =>    $msg,
        ];

        session()->setFlashdata($ndata);
    }

    protected function isOnline($site = 'https://www.youtube.com') {
        if(@fopen($site, 'r')) {
            return true;
        } else {
            return false;
        }
    }
}
