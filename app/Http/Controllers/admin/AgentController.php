<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{

    public function ShowAgent()
    {
        $all = Agent::all();
        return view('admin.agent.agent_data', compact('all'));
    }

    public function AddAgent()
    {
        return view('admin.agent.agent_add');
    }

    public function InsertAgent(Request $request)
    {
        $validatedData = $request->validate([
            'foto_penjual' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto_penjual')) {
            $path = $request->file('foto_penjual')->store('uploads');
        } else {
            $path = '';
        }

        $insert = Agent::create($request->except(['_token', 'submit']));
        if ($insert) {
            $notification = array(
                'messege' => 'Successfully Agent Updated',
                'alert-type' => 'success',
            );
            return redirect()->route('ShowAgent')->with($notification, $path);
        } else {
            $notification = array(
                'messege' => 'Something is Wrong, please try again!',
                'alert-type' => 'error',
            );
            return redirect()->route('ShowAgent')->with($notification, $path);
        }
    }

    public function EditAgent($id)
    {
        $edit = Agent::find($id);
        return view('admin.Agent.Agent_edit', compact('edit'));
    }

    public function UpdateAgent(Request $request, $id)
    {
        $edit = Agent::find($id);
        $edit->update($request->except(['_token', 'submit']));
        if ($edit) {
            $notification = array(
                'messege' => 'Successfully Agent Updated',
                'alert-type' => 'success',
            );
            return redirect()->route('ShowAgent')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Something is Wrong, please try again!',
                'alert-type' => 'error',
            );
            return redirect()->route('ShowAgent')->with($notification);
        }
    }

    public function DeleteAgent($id)
    {
        $agent = Agent::find($id);
        $agent->delete();
        if ($agent) {
            $notification = array(
                'messege' => 'Successfully Agent Deleted',
                'alert-type' => 'success',
            );
            return redirect()->route('ShowAgent')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Something is Wrong, please try again!',
                'alert-type' => 'error',
            );
            return redirect()->route('ShowAgent')->with($notification);
        }
    }
}
