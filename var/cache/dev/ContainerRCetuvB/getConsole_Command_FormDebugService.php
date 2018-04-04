<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load(__DIR__.'/getForm_RegistryService.php')), array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'), array(0 => 'App\\Form\\AlunoType', 1 => 'App\\Form\\BannerType', 2 => 'App\\Form\\ContentType', 3 => 'App\\Form\\ImageType', 4 => 'App\\Form\\MenuType', 5 => 'App\\Form\\NewsLetterType', 6 => 'App\\Form\\PageType', 7 => 'App\\Form\\SubMenuType', 8 => 'App\\Form\\TextType', 9 => 'App\\Form\\UsersType', 10 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 11 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 12 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'), array(0 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension'), array(0 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'));

$instance->setName('debug:form');

return $instance;