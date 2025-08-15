<?php

namespace App\Observers;

use App\Models\User;

use Illuminate\Support\Facades\Mail;

class UserObserver
{
	public $data = [
	];

	/**
	 * Handle the user "created" event.
	 *
	 * @param \App\Models\User $user
	 * @return void
	 */
	public function created(User $user) {
		//
	}

	/**
	 * Handle the user "updated" event.
	 *
	 * @param \App\Models\User $user
	 * @return void
	 */
	public function updated(User $user) {

		if ($user->isDirty('state')) {

			\Log::info(print_r([__FILE__, __LINE__,

				$user->state,
				$user->getOriginal('state'),

				$user->toArray(),

			], true));

			if ($user->state == 1 && $user->getOriginal('state') == 0) {

				$this->data['mail']['to'] = $user->email;

				$request = [
					'last-name' => $user->lastname,
					'first-name' => $user->firstname
				];

				Mail::send(
					['html' => 'mail/registration/customer_accepted'],
					[
						'data' =>
							[
								'request' => $request
							]
					],
					function ($message) {
						$message
							->to($this->data['mail']['to'])
							->subject('Regisztráció jóváhagyva!')
							->from('admin@nemoseal.hu');
					});

			}

		}

	}

	/**
	 * Handle the user "deleted" event.
	 *
	 * @param \App\Models\User $user
	 * @return void
	 */
	public function deleted(User $user) {
		//
	}

	/**
	 * Handle the user "restored" event.
	 *
	 * @param \App\Models\User $user
	 * @return void
	 */
	public function restored(User $user) {
		//
	}

	/**
	 * Handle the user "force deleted" event.
	 *
	 * @param \App\Models\User $user
	 * @return void
	 */
	public function forceDeleted(User $user) {
		//
	}
}
