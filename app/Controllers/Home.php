<?php
namespace App\Controllers;
use CodeIgniter\Session\Session;
use App\Models\login;

class Home extends BaseController
{
    public function __construct() {

        $session = session();
    }

    public function index()
    {
        $session = session();
        return view('homepage');
    }
    public function welcome_message()
    {
        $session = session();
        return view('welcome_message');
    }
     public function register()
    {
        helper(['form']);
        $data = [];
        echo view('register', $data);
         //return view('register');
    }
     public function admin_home_page()
    {
        $session = session();
        $db      = \Config\Database::connect();
        $query = $db->query("SELECT * FROM users");
        $data['users']  = $query->getResultArray(); 

        return view('admin/admin_home_page',$data);

    }
     public function user_home_page()
    {
        $session = session();
        return view('user/user_home_page');
    }

     public function sign_up()
    {
        //include helper form
        helper(['form']);
        $session = session();
        //set rules validation form
        $rules = [
            'firstname'          => 'required',
            'lastname'          => 'required',
            'address'          => 'required',
            'email'         => 'required|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            //'confpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $login = new Login();
            $usertype="user";
            $user_status="inactive";
            $data = [
                'firstname'     => $this->request->getVar('firstname'),
                'lastname'     => $this->request->getVar('lastname'),
                'email'    => $this->request->getVar('email'),
                'address'    => $this->request->getVar('address'),
                'user_type'=>$usertype,
                'user_status' => $user_status,
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $login->save($data);
            $session = session();
            $success ="You have successfully registered with ATMA, Please login here";
            $session->setFlashdata('success_response' ,$success);
            return redirect()->to(base_url('welcome_message'));
            
            //echo view('welcome_message', $data);



        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        
    }
}

 public function sign_in()
    {
        //include helper form
        helper(['form']);
        $session = session();
        //set rules validation form
        $rules = [
            
            'email'         => 'required|valid_email',
            'password'      => 'required|min_length[6]|max_length[200]',
            //'confpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $login = new Login();
            $email =$this->request->getVar('email');               
            $password =$this->request->getVar('password'); 
            $session = session();
            $data = $login->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['id'],
                    'firstname'     => $data['firstname'],
                    'lastname'     => $data['lastname'],
                    'address'     => $data['address'],
                    'created_at'     => $data['created_at'],
                    'email'    => $data['email'],
                    'user_type'     => $data['user_type'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                if($data['user_type']=="administrator"){
                    $session->setFlashdata('msg', 'Welcome back '.$data['firstname'].' '.$data['lastname'].'');
                  return redirect()->to('/admin/admin_home_page'); 

              }else if($data ['user_type']=="user"){
                $session->setFlashdata('msg', 'Welcome to ATMA '.$data['firstname'].' '.$data['lastname'].'');
                return redirect()->to('/user/user_home_page'); 
              }
                
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/welcome_message');
            }
        }else{
            $session->setFlashdata('msg', 'Account not Found');
            return redirect()->to('/welcome_message');
        }
            
            //echo view('welcome_message', $data);



        }else{
            $data['validation'] = $this->validator;
            echo view('welcome_message', $data);
        
    }
   }

   public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function block($id){
       $session = session();
        $db      = \Config\Database::connect();
        $query = $db->query("UPDATE users SET user_status='suspended' WHERE id='$id'");
          if($query){
                $session->setFlashdata('msg', 'User successfully suspended');
                  $query = $db->query("SELECT * FROM users");
                 $data['users']  = $query->getResultArray(); 

                 return view('admin/admin_home_page',$data);

              }
        
        
    }

public function activate($id){
       $session = session();
        $db      = \Config\Database::connect();
       $query = $db->query("UPDATE users SET user_status='active' WHERE id='$id'");
          if($query){
                $session->setFlashdata('msg', 'User successfully activated');
                  $query = $db->query("SELECT * FROM users");
                 $data['users']  = $query->getResultArray(); 

                 return view('admin/admin_home_page',$data);

              }
        
        
    }
    public function delete($id){
       $session = session();
        $db      = \Config\Database::connect();
        $query = $db->query("UPDATE users SET user_status='deleted' WHERE id='$id'");
          if($query){
                $session->setFlashdata('msg', 'User successfully activated');
                  $query = $db->query("SELECT * FROM users");
                 $data['users']  = $query->getResultArray(); 

                 return view('admin/admin_home_page',$data);

              }
    }   

        public function add_user()
    {
        //include helper form
        helper(['form']);
        $session = session();
        $db      = \Config\Database::connect();
        //set rules validation form
        $rules = [
            'firstname'          => 'required',
            'lastname'          => 'required',
            'address'          => 'required',
            'email'         => 'required|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'user_type'          => 'required',
            //'confpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $login = new Login();
            $user_status="inactive";
            $data = [
                'firstname'     => $this->request->getVar('firstname'),
                'lastname'     => $this->request->getVar('lastname'),
                'email'    => $this->request->getVar('email'),
                'address'    => $this->request->getVar('address'),
                'user_type'=>$this->request->getVar('user_type'),
                'user_status' => $user_status,
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $login->save($data);
            $session = session();
            $success ="You have successfully registered user";
            $session->setFlashdata('msg' ,$success);
            $query = $db->query("SELECT * FROM users");
            $data['users']  = $query->getResultArray(); 
             return view('admin/admin_home_page',$data);
            
            //echo view('welcome_message', $data);



        }else{
             $data['users'] =[];
            $data['validation'] = $this->validator;
            echo view('admin/admin_home_page', $data);
        
    }
}
 public function singleUser($id = null){
        $userModel = new Login();
        $data['data'] = $userModel->where('id', $id)->first();
        return view('edit_user', $data);
    }
public function update(){
      
       $userModel = new Login();
        $id = $this->request->getVar('id');
        $data = [
            'firstname'     => $this->request->getVar('firstname'),
                'lastname'     => $this->request->getVar('lastname'),
                'email'    => $this->request->getVar('email'),
                'address'    => $this->request->getVar('address'),
                'user_type'=>$this->request->getVar('user_type'),
        ];
        $userModel->update($id, $data);
  $db      = \Config\Database::connect();
   $session = session();
            $query = $db->query("SELECT * FROM users");
            $data['users']  = $query->getResultArray(); 
             return view('admin/admin_home_page',$data);

       
}
 
}
