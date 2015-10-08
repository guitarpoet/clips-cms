{extends file="bootstrap-layout.tpl"}
							{block name="toolbar"}
								{a class="btn btn-primary" form-for="article_create"}
									{lang}Create{/lang}
								{/a}
							{/block}
									{block name="workbench"}
										{form name="article_create"}
											{field field="name"}{/field}
											{field field="categories[]"}
												{select data-no-select-box-it="true" options=$categories label-field="name" row=10 multiple="multiple" value-field="id"}
												{/select}
											{/field}
											{field field="author"}
												{select options=$users label-field="username" value-field="id"}
												{/select}
											{/field}
										{/form}
									{/block}
