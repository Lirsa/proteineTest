<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210526144627 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE course CHANGE date_course date_course DATETIME NOT NULL, CHANGE aller_retour aller_retour TINYINT(1) NOT NULL, CHANGE prix_course prix_course NUMERIC(7, 2) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE course CHANGE date_course date_course DATE NOT NULL, CHANGE aller_retour aller_retour TINYINT(1) DEFAULT NULL, CHANGE prix_course prix_course NUMERIC(10, 2) NOT NULL');
    }
}
