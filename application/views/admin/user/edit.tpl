{extends file="bootstrap-layout.tpl"}
							{block name="toolbar"}
								{action class=["btn", "btn-primary"] form-for="user_edit" action=$update}{/action}
							{/block}
										{block name="workbench"}
											{form name="user_edit"}
												{field field="id" state="hidden"}{/field}
												{field field="username"}{/field}
												{field field="password"}{/field}
												{field field="group_id"}
													{select options=$groups label-field="name" value-field="id"}
													{/select}
												{/field}
											{/form}
										{/block}
