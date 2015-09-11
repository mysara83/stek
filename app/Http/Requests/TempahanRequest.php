<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TempahanRequest extends Request
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = [
			'nama' => 'required',
		];

		foreach($this->request->get('nama_penumpang') as $key => $val)
		{

			$rules['nama_penumpang.'.$key] = 'required';
		}

		return $rules;
	}

	public function messages()
	{
		$messages = [];
		foreach($this->request->get('nama_penumpang') as $key => $val)
		{
		$messages['nama_penumpang.'.$key.'.max'] = 'The field labeled "Book Title '.$key.'" must be less than :max characters.';
		$messages['nama_penumpang.'.$key.'.required'] = 'Nama penumpang perlu diisi.';
		}
		return $messages;
	}
}
