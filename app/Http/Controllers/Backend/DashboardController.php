<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
         // $agents = $this->appRepository->agentlist();
         // $tAgent=count($agents);
         // $users = $this->appRepository->userlist();
         // $tUser=count($users);
         // $ticket = $this->appRepository->ticketlist();
         // $tTicket=count($ticket);
         // $department = $this->appRepository->departmentlist();
         // $tDept=count($department);
   		$ddata=array(
   			'agents'=>'101',
   			'users'=>'102',
   			'tickets'=>'103',
   			'department'=>'104'
   			);
         return view('backend.dashboard', compact('ddata'));                         
    } 
}
