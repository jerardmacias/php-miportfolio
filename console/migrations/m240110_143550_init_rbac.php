<?php

use yii\db\Migration;

/**
 * Class m240110_143550_init_rbac
 */
class m240110_143550_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $manageTestimonials = $auth->createPermission('manageTestimonials');
        $manageTestimonials->description = 'Manage all testimonials (full access)';
        $auth->add($manageTestimonials);

        $manageProjects = $auth->createPermission('manageProjects');
        $manageProjects->description = 'Manage all projects (full access)';
        $auth->add($manageProjects);

        $manageBlog = $auth->createPermission('manageBlog');
        $manageBlog->description = 'Manage blog (full access)';
        $auth->add($manageBlog);

        $viewProject = $auth->createPermission('viewProject');
        $viewProject->description = 'Project actionView';
        $auth->add($viewProject);

        $testimonialManager = $auth->createRole('testimonialManager');
        $auth->add($testimonialManager);
        $auth->addChild($testimonialManager, $manageTestimonials);
        $auth->addChild($testimonialManager, $viewProject);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $testimonialManager);
        $auth->addChild($admin, $manageProjects);
        $auth->addChild($admin, $manageBlog);

        $auth->assign($admin, 1);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240110_143550_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}
