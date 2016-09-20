<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Response;
use App\Http\Requests;

class RelationshipsController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }

    public function store(Request $request)
    {
        $currentUser = Auth::user();
        $isFollow = $request->is_follow == 'true';

        if (!$isFollow) {
            try {
                $user = User::findOrFail($request->follower_id);

                if (!$user->isFollowedByAnother($currentUser)) {
                    $currentUser->followings()->attach($request->follower_id);
                }

                return Response::json([
                    'success' => true,
                    'message' => trans('homepage.follow-message.follow_success'),
                ]);
            } catch (ModelNotFoundException $ex) {
                return redirect()->back()->withErrors($ex->getMessage());
            }
        }

        $result = $currentUser->followings()->detach($request->follower_id);

        return Response::json([
            'success' => $result,
            'message' => $result ? trans('homepage.follow-message.unfollow_success') : trans('homepage.follow-message.unfollow_fail'),
        ]);
    }
}
