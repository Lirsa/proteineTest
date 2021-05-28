<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210526163710 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE course_passager (course_id INT NOT NULL, passager_id INT NOT NULL, INDEX IDX_164043BF591CC992 (course_id), INDEX IDX_164043BF71A51189 (passager_id), PRIMARY KEY(course_id, passager_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE course_passager ADD CONSTRAINT FK_164043BF591CC992 FOREIGN KEY (course_id) REFERENCES course (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE course_passager ADD CONSTRAINT FK_164043BF71A51189 FOREIGN KEY (passager_id) REFERENCES personne (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE course ADD chauffeur_id INT NOT NULL, ADD client_id INT NOT NULL');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB985C0B3BE FOREIGN KEY (chauffeur_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE course ADD CONSTRAINT FK_169E6FB919EB6921 FOREIGN KEY (client_id) REFERENCES personne (id)');
        $this->addSql('CREATE INDEX IDX_169E6FB985C0B3BE ON course (chauffeur_id)');
        $this->addSql('CREATE INDEX IDX_169E6FB919EB6921 ON course (client_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE course_passager');
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB985C0B3BE');
        $this->addSql('ALTER TABLE course DROP FOREIGN KEY FK_169E6FB919EB6921');
        $this->addSql('DROP INDEX IDX_169E6FB985C0B3BE ON course');
        $this->addSql('DROP INDEX IDX_169E6FB919EB6921 ON course');
        $this->addSql('ALTER TABLE course DROP chauffeur_id, DROP client_id');
    }
}
