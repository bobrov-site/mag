<section class="requisites">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="border">
					<div class="requisites-header d-flex justify-content-between align-items-center">
						<h2 class="requisites-header-title">Наши реквизиты</h2>
                        <div class="buttons-arrows">
                            <a id="collapseRequisitesLink" class="arrow-down-link" data-bs-toggle="collapse" href="#collapseRequisites" role="button" aria-expanded="false" aria-controls="collapseRequisites">
                                <div id="collapseRequisitesButton" class="arrow-down-button"></div>
                            </a>
                        </div>
					</div>
                    <div id="collapseRequisites" class="collapse">
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        Полное официальное наименование предприятия
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
                                        <?php the_field('full_name'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        Сокращенное наименование предприятия
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('name'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        Полное наименование на английском языке
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('eng_name'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        Директор
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('director'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        ИНН/КПП
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('inn'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        ОГРН
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('ogrn'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        Дата государственной регистрации
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('reg_date'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        Почтовый и Юридический адрес
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('address'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        Номер расчетного счета
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('account'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        Наименование учреждения банка
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('bank'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        Местонахождение учреждения банка
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('bank_address'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        Корреспондентский счет банка
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('bank_account'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        БИК
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('bik'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        ОКВЭД
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('okved'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="requisites-field">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="requisites-field-title">
                                        E-mail
                                    </h4>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <p class="requisites-field-data">
	                                    <?php the_field('email'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>