CREATE TABLE `tbl_noticias` (
  `id_noticia` int(11) NOT NULL auto_increment,
  `id_categoria_noticia` int NOT NULL default '0',
  `titulo` varchar(100) NOT NULL default '',
  `descricao` varchar(255) NOT NULL default '',
  `destaque` char(3) NOT NULL default '',
  `fotografo` varchar(100) NOT NULL default '',
  `legenda` varchar(55) NOT NULL default '',
  `msg` text NOT NULL,
  `nome_arquivo` varchar(100) NOT NULL default '',
  `data` varchar(15) NOT NULL default '',
  `status` tinyint(3) NOT NULL default '0',
  PRIMARY KEY  (`id_noticia`)
) ROW_FORMAT=DYNAMIC;

INSERT INTO `tbl_noticias` VALUES (2,2,'Sistema de Notícias 01','Descrição do Sistema de Notícias','1','','Webmaster.PT','<p style=

\"MARGIN-RIGHT: 0px\">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor 

lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem 

ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum 

dolor.</p><p style=\"MARGIN-RIGHT: 0px\">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor 

lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem 

ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum 

dolor lorem ipsum dolor.</p><p style=\"MARGIN-RIGHT: 0px\">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor 

lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem 

ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum 

dolor lorem ipsum dolor lorem ipsum dolor.</p><p style=\"MARGIN-RIGHT: 0px\">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor 

lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem 

ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum 

dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor.</p>','ad_orcamento.jpg','02/01/2010',1);
INSERT INTO `tbl_noticias` VALUES (3,2,'Lorem ipsum dolor','Lorem ipsum dolor lorem ipsum dolor','1','','Webmaster.PT','<p style=

\"MARGIN-RIGHT: 0px\">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor 

lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem 

ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum 

dolor.</p><p style=\"MARGIN-RIGHT: 0px\">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor 

lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem 

ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum 

dolor lorem ipsum dolor.</p><p style=\"MARGIN-RIGHT: 0px\">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor 

lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem 

ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum 

dolor lorem ipsum dolor lorem ipsum dolor.</p><p style=\"MARGIN-RIGHT: 0px\">Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor 

lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem 

ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum 

dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor.</p>','bg_woman_help.jpeg','02/01/2010',1);


CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(150) NOT NULL default '',
  `email` varchar(150) NOT NULL default '',
  `senha` varchar(50) NOT NULL default '',
  `status` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ;

INSERT INTO `tbl_usuarios` VALUES (1,'Administrador','teste@teste.com','123456','1');