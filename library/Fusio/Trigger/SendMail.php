<?php

namespace Fusio\Trigger;

use Fusio\Parameter;
use PSX\Http\Request;

class SendMail extends ModelActionAbstract
{
	public function execute(Request $request, array $parameters)
	{
	}

	public function getParameters()
	{
		return array(
			new Parameter\Text('receiver', 'Receiver'),
			new Parameter\Text('template_id', 'Template'),
		);
	}
}