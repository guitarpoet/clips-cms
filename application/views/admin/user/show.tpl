{extends file="bootstrap-layout.tpl"}
	 						{block name="toolbar"}
								{action class=["btn", "btn-primary"] action=$edit}{/action}
							{/block}
										{block name="workbench"}
											{form name="user_edit" state="readonly"}
												{field field="id" type="hidden"}{/field}
												{field field="username"}{/field}
												{field field="password"}{/field}
												{field field="group_id"}
													{select options=$groups label-field="name" value-field="id"}
													{/select}
												{/field}
											{/form}
										{/block}
