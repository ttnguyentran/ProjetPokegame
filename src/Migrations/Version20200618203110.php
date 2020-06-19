<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200618203110 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE trainer');
        $this->addSql('DROP TABLE type_by_zone');
        $this->addSql('DROP INDEX dresseur_id_const ON pokemon');
        $this->addSql('ALTER TABLE pokemon DROP est_en_vente, CHANGE id_espece id_espece INT NOT NULL, CHANGE derniere_chasse derniere_chasse DATETIME NOT NULL, CHANGE dernier_entrainement dernier_entrainement DATETIME NOT NULL');
        $this->addSql('ALTER TABLE ref_pokemon_type CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE type_1 type_1 INT DEFAULT NULL, CHANGE type_2 type_2 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ref_pokemon_type ADD CONSTRAINT FK_5483EF999C6D843C FOREIGN KEY (type_1) REFERENCES ref_elementary_type (id)');
        $this->addSql('ALTER TABLE ref_pokemon_type ADD CONSTRAINT FK_5483EF99564D586 FOREIGN KEY (type_2) REFERENCES ref_elementary_type (id)');
        $this->addSql('CREATE INDEX IDX_5483EF999C6D843C ON ref_pokemon_type (type_1)');
        $this->addSql('CREATE INDEX IDX_5483EF99564D586 ON ref_pokemon_type (type_2)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE pieces pieces INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE trainer (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, email VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, password VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nb_pieces INT NOT NULL, starter_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE type_by_zone (id_zone_capture INT NOT NULL, id_type INT NOT NULL, PRIMARY KEY(id_zone_capture, id_type)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE pokemon ADD est_en_vente TINYINT(1) DEFAULT \'NULL\', CHANGE id_espece id_espece INT DEFAULT NULL, CHANGE derniere_chasse derniere_chasse DATETIME DEFAULT \'NULL\', CHANGE dernier_entrainement dernier_entrainement DATETIME DEFAULT \'NULL\'');
        $this->addSql('CREATE INDEX dresseur_id_const ON pokemon (dresseur_id)');
        $this->addSql('ALTER TABLE ref_pokemon_type DROP FOREIGN KEY FK_5483EF999C6D843C');
        $this->addSql('ALTER TABLE ref_pokemon_type DROP FOREIGN KEY FK_5483EF99564D586');
        $this->addSql('DROP INDEX IDX_5483EF999C6D843C ON ref_pokemon_type');
        $this->addSql('DROP INDEX IDX_5483EF99564D586 ON ref_pokemon_type');
        $this->addSql('ALTER TABLE ref_pokemon_type CHANGE type_1 type_1 INT NOT NULL, CHANGE type_2 type_2 INT NOT NULL, CHANGE nom nom VARCHAR(50) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`, CHANGE pieces pieces INT DEFAULT NULL');
    }
}
