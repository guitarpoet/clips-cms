{extends file="bootstrap-layout.tpl"}
							{block name="toolbar"}
								{a class="btn btn-primary" form-for="article_edit"}
									{lang}Update{/lang}
								{/a}
							{/block}
									{block name="workbench"}
										{form name="article_edit"}
											{field field="id" state="hidden"}{/field}
											{field field="name"}{/field}
											{field field="categories[]"}
												{select data-no-select-box-it="true" options=$categories label-field="name" multiple="multiple" value-field="id"}
												{/select}
											{/field}
											{field field="author"}
												{select options=$users label-field="username" value-field="id"}
												{/select}
											{/field}
										{/form}
									{/block}
