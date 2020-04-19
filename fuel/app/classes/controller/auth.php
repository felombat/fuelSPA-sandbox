<?php

class Controller_Auth extends \Controller_Rest {

    function post_login() { 
         
        //if (\Input::is_ajax()) {
            // if (\Input::param('username') and \Input::param('password')) {
            //     $username = \Input::param('username');
            //     $password = md5(\Input::param('password'));
            //     //check password and username or anything
            //     $msg = 'fail';
            //     echo json_encode(array('status' => $msg));
            // }
            

            // check the credentials.
            if (\Auth::instance()->login(\Input::param('username'), \Input::param('password')))
            {
                // did the user want to be remembered?
                // if (\Input::param('remember', false))
                // {
                //     // create the remember-me cookie
                //     \Auth::remember_me();
                // }
                // else
                // {
                //     // delete the remember-me cookie if present
                //     \Auth::dont_remember_me();
                // }

                // logged in, go back to the page the user came from, or the
                // application dashboard if no previous page can be detected
                //\Response::redirect_back('dashboard');
                $this->response->status = 200;
                 
                $token = Security::generate_token();
                $data['token'] = $token;
                Session::set('fuel_token', $token);
                return $this->response(json_encode($data), 200);
                //echo  json_encode($data); 
            }
            else
            {
                // login failed, show an error message
                // \Messages::error(__('login.failure'));
                $this->response->status = 401;
                
                return $this->response(json_encode(array('error' => "wrong credentials")), 401);
            }

        // }
    }

}
