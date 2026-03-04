<?php

/*
 * Generated from Golampi.g4 by ANTLR 4.13.1
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GolampiParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               VAR = 7, CONST = 8, FUNC = 9, IF = 10, ELSE = 11, SWITCH = 12, 
               CASE = 13, DEFAULT = 14, FOR = 15, BREAK = 16, CONTINUE = 17, 
               RETURN = 18, NIL = 19, INT32 = 20, FLOAT32 = 21, BOOL = 22, 
               RUNE = 23, STRING_TYPE = 24, TRUE = 25, FALSE = 26, ID = 27, 
               ENTERO_LITERAL = 28, FLOTANTE_LITERAL = 29, CADENA_LITERAL = 30, 
               RUNA_LITERAL = 31, ASIGN = 32, ASIGN_SUMA = 33, ASIGN_RESTA = 34, 
               ASIGN_MULT = 35, ASIGN_DIV = 36, SUMA = 37, RESTA = 38, MULT = 39, 
               DIV = 40, MOD = 41, EQ = 42, NEQ = 43, LT = 44, LTE = 45, 
               GT = 46, GTE = 47, AND = 48, OR = 49, NOT = 50, ADDR = 51, 
               INC = 52, DEC = 53, PARENIZQ = 54, PARENDER = 55, CORCHIZQ = 56, 
               CORCHDER = 57, LLAVEIZQ = 58, LLAVEDER = 59, COMA = 60, DOSPUNTOS = 61, 
               PUNTOYCOMA = 62, PUNTO = 63, COMENTARIO_LINEA = 64, COMENTARIO_BLOQUE = 65, 
               ESPACIO = 66;

		public const RULE_programa = 0, RULE_declaracion = 1, RULE_declVar = 2, 
               RULE_declVarCorta = 3, RULE_declConst = 4, RULE_declFunc = 5, 
               RULE_listaParam = 6, RULE_param = 7, RULE_tipoRetorno = 8, 
               RULE_listaTipos = 9, RULE_tipo = 10, RULE_tipoArray = 11, 
               RULE_bloque = 12, RULE_sentencia = 13, RULE_sentAsign = 14, 
               RULE_opAsign = 15, RULE_sentIncDec = 16, RULE_sentIf = 17, 
               RULE_sentSimple = 18, RULE_sentSwitch = 19, RULE_clausulaCaso = 20, 
               RULE_sentFor = 21, RULE_clausulaFor = 22, RULE_sentBreak = 23, 
               RULE_sentContinue = 24, RULE_sentReturn = 25, RULE_sentExpr = 26, 
               RULE_listaExpr = 27, RULE_expresion = 28, RULE_primario = 29, 
               RULE_llamadaBuiltIn = 30, RULE_argumentos = 31, RULE_literal = 32, 
               RULE_listaId = 33;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'programa', 'declaracion', 'declVar', 'declVarCorta', 'declConst', 'declFunc', 
			'listaParam', 'param', 'tipoRetorno', 'listaTipos', 'tipo', 'tipoArray', 
			'bloque', 'sentencia', 'sentAsign', 'opAsign', 'sentIncDec', 'sentIf', 
			'sentSimple', 'sentSwitch', 'clausulaCaso', 'sentFor', 'clausulaFor', 
			'sentBreak', 'sentContinue', 'sentReturn', 'sentExpr', 'listaExpr', 'expresion', 
			'primario', 'llamadaBuiltIn', 'argumentos', 'literal', 'listaId'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "':='", "'Println'", "'len'", "'now'", "'substr'", "'typeOf'", 
		    "'var'", "'const'", "'func'", "'if'", "'else'", "'switch'", "'case'", 
		    "'default'", "'for'", "'break'", "'continue'", "'return'", "'nil'", 
		    "'int32'", "'float32'", "'bool'", "'rune'", "'string'", "'true'", 
		    "'false'", null, null, null, null, null, "'='", "'+='", "'-='", "'*='", 
		    "'/='", "'+'", "'-'", "'*'", "'/'", "'%'", "'=='", "'!='", "'<'", 
		    "'<='", "'>'", "'>='", "'&&'", "'||'", "'!'", "'&'", "'++'", "'--'", 
		    "'('", "')'", "'['", "']'", "'{'", "'}'", "','", "':'", "';'", "'.'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, "VAR", "CONST", "FUNC", 
		    "IF", "ELSE", "SWITCH", "CASE", "DEFAULT", "FOR", "BREAK", "CONTINUE", 
		    "RETURN", "NIL", "INT32", "FLOAT32", "BOOL", "RUNE", "STRING_TYPE", 
		    "TRUE", "FALSE", "ID", "ENTERO_LITERAL", "FLOTANTE_LITERAL", "CADENA_LITERAL", 
		    "RUNA_LITERAL", "ASIGN", "ASIGN_SUMA", "ASIGN_RESTA", "ASIGN_MULT", 
		    "ASIGN_DIV", "SUMA", "RESTA", "MULT", "DIV", "MOD", "EQ", "NEQ", "LT", 
		    "LTE", "GT", "GTE", "AND", "OR", "NOT", "ADDR", "INC", "DEC", "PARENIZQ", 
		    "PARENDER", "CORCHIZQ", "CORCHDER", "LLAVEIZQ", "LLAVEDER", "COMA", 
		    "DOSPUNTOS", "PUNTOYCOMA", "PUNTO", "COMENTARIO_LINEA", "COMENTARIO_BLOQUE", 
		    "ESPACIO"
		];

		private const SERIALIZED_ATN =
			[4, 1, 66, 420, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 1, 0, 5, 0, 70, 8, 0, 10, 0, 12, 0, 73, 9, 0, 1, 0, 1, 0, 1, 1, 
		    1, 1, 1, 1, 3, 1, 80, 8, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 3, 2, 87, 
		    8, 2, 1, 2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 4, 
		    1, 4, 1, 4, 1, 4, 1, 4, 1, 5, 1, 5, 1, 5, 1, 5, 3, 5, 107, 8, 5, 1, 
		    5, 1, 5, 3, 5, 111, 8, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 5, 6, 118, 
		    8, 6, 10, 6, 12, 6, 121, 9, 6, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 
		    1, 8, 1, 8, 3, 8, 131, 8, 8, 1, 9, 1, 9, 1, 9, 5, 9, 136, 8, 9, 10, 
		    9, 12, 9, 139, 9, 9, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 
		    10, 1, 10, 3, 10, 149, 8, 10, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 
		    12, 1, 12, 5, 12, 158, 8, 12, 10, 12, 12, 12, 161, 9, 12, 1, 12, 1, 
		    12, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 1, 13, 
		    1, 13, 1, 13, 1, 13, 1, 13, 3, 13, 178, 8, 13, 1, 14, 1, 14, 1, 14, 
		    1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 3, 15, 190, 8, 15, 
		    1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 3, 16, 200, 
		    8, 16, 1, 17, 1, 17, 1, 17, 1, 17, 3, 17, 206, 8, 17, 1, 17, 1, 17, 
		    1, 17, 1, 17, 1, 17, 3, 17, 213, 8, 17, 3, 17, 215, 8, 17, 1, 18, 
		    1, 18, 1, 18, 3, 18, 220, 8, 18, 1, 19, 1, 19, 1, 19, 1, 19, 3, 19, 
		    226, 8, 19, 1, 19, 3, 19, 229, 8, 19, 1, 19, 1, 19, 5, 19, 233, 8, 
		    19, 10, 19, 12, 19, 236, 9, 19, 1, 19, 1, 19, 1, 20, 1, 20, 1, 20, 
		    1, 20, 5, 20, 244, 8, 20, 10, 20, 12, 20, 247, 9, 20, 1, 20, 1, 20, 
		    1, 20, 5, 20, 252, 8, 20, 10, 20, 12, 20, 255, 9, 20, 3, 20, 257, 
		    8, 20, 1, 21, 1, 21, 1, 21, 3, 21, 262, 8, 21, 1, 21, 1, 21, 1, 22, 
		    3, 22, 267, 8, 22, 1, 22, 1, 22, 3, 22, 271, 8, 22, 1, 22, 1, 22, 
		    3, 22, 275, 8, 22, 1, 23, 1, 23, 1, 23, 1, 24, 1, 24, 1, 24, 1, 25, 
		    1, 25, 3, 25, 285, 8, 25, 1, 25, 1, 25, 1, 26, 1, 26, 1, 26, 1, 27, 
		    1, 27, 1, 27, 5, 27, 295, 8, 27, 10, 27, 12, 27, 298, 9, 27, 1, 28, 
		    1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 
		    28, 1, 28, 3, 28, 312, 8, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 
		    28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 
		    1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 
		    28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 
		    1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 5, 28, 353, 8, 28, 10, 28, 12, 
		    28, 356, 9, 28, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 
		    29, 1, 29, 3, 29, 367, 8, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 29, 1, 
		    29, 1, 29, 1, 29, 1, 29, 1, 29, 5, 29, 379, 8, 29, 10, 29, 12, 29, 
		    382, 9, 29, 1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 1, 30, 
		    1, 30, 1, 30, 1, 30, 1, 30, 3, 30, 396, 8, 30, 1, 31, 1, 31, 3, 31, 
		    400, 8, 31, 1, 31, 1, 31, 1, 32, 1, 32, 1, 32, 1, 32, 1, 32, 1, 32, 
		    3, 32, 410, 8, 32, 1, 33, 1, 33, 1, 33, 5, 33, 415, 8, 33, 10, 33, 
		    12, 33, 418, 9, 33, 1, 33, 0, 2, 56, 58, 34, 0, 2, 4, 6, 8, 10, 12, 
		    14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 
		    48, 50, 52, 54, 56, 58, 60, 62, 64, 66, 0, 0, 472, 0, 71, 1, 0, 0, 
		    0, 2, 79, 1, 0, 0, 0, 4, 81, 1, 0, 0, 0, 6, 90, 1, 0, 0, 0, 8, 95, 
		    1, 0, 0, 0, 10, 102, 1, 0, 0, 0, 12, 114, 1, 0, 0, 0, 14, 122, 1, 
		    0, 0, 0, 16, 130, 1, 0, 0, 0, 18, 132, 1, 0, 0, 0, 20, 148, 1, 0, 
		    0, 0, 22, 150, 1, 0, 0, 0, 24, 155, 1, 0, 0, 0, 26, 177, 1, 0, 0, 
		    0, 28, 179, 1, 0, 0, 0, 30, 189, 1, 0, 0, 0, 32, 199, 1, 0, 0, 0, 
		    34, 201, 1, 0, 0, 0, 36, 219, 1, 0, 0, 0, 38, 221, 1, 0, 0, 0, 40, 
		    256, 1, 0, 0, 0, 42, 258, 1, 0, 0, 0, 44, 266, 1, 0, 0, 0, 46, 276, 
		    1, 0, 0, 0, 48, 279, 1, 0, 0, 0, 50, 282, 1, 0, 0, 0, 52, 288, 1, 
		    0, 0, 0, 54, 291, 1, 0, 0, 0, 56, 311, 1, 0, 0, 0, 58, 366, 1, 0, 
		    0, 0, 60, 395, 1, 0, 0, 0, 62, 397, 1, 0, 0, 0, 64, 409, 1, 0, 0, 
		    0, 66, 411, 1, 0, 0, 0, 68, 70, 3, 2, 1, 0, 69, 68, 1, 0, 0, 0, 70, 
		    73, 1, 0, 0, 0, 71, 69, 1, 0, 0, 0, 71, 72, 1, 0, 0, 0, 72, 74, 1, 
		    0, 0, 0, 73, 71, 1, 0, 0, 0, 74, 75, 5, 0, 0, 1, 75, 1, 1, 0, 0, 0, 
		    76, 80, 3, 4, 2, 0, 77, 80, 3, 8, 4, 0, 78, 80, 3, 10, 5, 0, 79, 76, 
		    1, 0, 0, 0, 79, 77, 1, 0, 0, 0, 79, 78, 1, 0, 0, 0, 80, 3, 1, 0, 0, 
		    0, 81, 82, 5, 7, 0, 0, 82, 83, 3, 66, 33, 0, 83, 86, 3, 20, 10, 0, 
		    84, 85, 5, 32, 0, 0, 85, 87, 3, 54, 27, 0, 86, 84, 1, 0, 0, 0, 86, 
		    87, 1, 0, 0, 0, 87, 88, 1, 0, 0, 0, 88, 89, 5, 62, 0, 0, 89, 5, 1, 
		    0, 0, 0, 90, 91, 3, 66, 33, 0, 91, 92, 5, 1, 0, 0, 92, 93, 3, 54, 
		    27, 0, 93, 94, 5, 62, 0, 0, 94, 7, 1, 0, 0, 0, 95, 96, 5, 8, 0, 0, 
		    96, 97, 5, 27, 0, 0, 97, 98, 3, 20, 10, 0, 98, 99, 5, 32, 0, 0, 99, 
		    100, 3, 56, 28, 0, 100, 101, 5, 62, 0, 0, 101, 9, 1, 0, 0, 0, 102, 
		    103, 5, 9, 0, 0, 103, 104, 5, 27, 0, 0, 104, 106, 5, 54, 0, 0, 105, 
		    107, 3, 12, 6, 0, 106, 105, 1, 0, 0, 0, 106, 107, 1, 0, 0, 0, 107, 
		    108, 1, 0, 0, 0, 108, 110, 5, 55, 0, 0, 109, 111, 3, 16, 8, 0, 110, 
		    109, 1, 0, 0, 0, 110, 111, 1, 0, 0, 0, 111, 112, 1, 0, 0, 0, 112, 
		    113, 3, 24, 12, 0, 113, 11, 1, 0, 0, 0, 114, 119, 3, 14, 7, 0, 115, 
		    116, 5, 60, 0, 0, 116, 118, 3, 14, 7, 0, 117, 115, 1, 0, 0, 0, 118, 
		    121, 1, 0, 0, 0, 119, 117, 1, 0, 0, 0, 119, 120, 1, 0, 0, 0, 120, 
		    13, 1, 0, 0, 0, 121, 119, 1, 0, 0, 0, 122, 123, 5, 27, 0, 0, 123, 
		    124, 3, 20, 10, 0, 124, 15, 1, 0, 0, 0, 125, 131, 3, 20, 10, 0, 126, 
		    127, 5, 54, 0, 0, 127, 128, 3, 18, 9, 0, 128, 129, 5, 55, 0, 0, 129, 
		    131, 1, 0, 0, 0, 130, 125, 1, 0, 0, 0, 130, 126, 1, 0, 0, 0, 131, 
		    17, 1, 0, 0, 0, 132, 137, 3, 20, 10, 0, 133, 134, 5, 60, 0, 0, 134, 
		    136, 3, 20, 10, 0, 135, 133, 1, 0, 0, 0, 136, 139, 1, 0, 0, 0, 137, 
		    135, 1, 0, 0, 0, 137, 138, 1, 0, 0, 0, 138, 19, 1, 0, 0, 0, 139, 137, 
		    1, 0, 0, 0, 140, 149, 5, 20, 0, 0, 141, 149, 5, 21, 0, 0, 142, 149, 
		    5, 22, 0, 0, 143, 149, 5, 23, 0, 0, 144, 149, 5, 24, 0, 0, 145, 149, 
		    3, 22, 11, 0, 146, 147, 5, 39, 0, 0, 147, 149, 3, 20, 10, 0, 148, 
		    140, 1, 0, 0, 0, 148, 141, 1, 0, 0, 0, 148, 142, 1, 0, 0, 0, 148, 
		    143, 1, 0, 0, 0, 148, 144, 1, 0, 0, 0, 148, 145, 1, 0, 0, 0, 148, 
		    146, 1, 0, 0, 0, 149, 21, 1, 0, 0, 0, 150, 151, 5, 56, 0, 0, 151, 
		    152, 3, 56, 28, 0, 152, 153, 5, 57, 0, 0, 153, 154, 3, 20, 10, 0, 
		    154, 23, 1, 0, 0, 0, 155, 159, 5, 58, 0, 0, 156, 158, 3, 26, 13, 0, 
		    157, 156, 1, 0, 0, 0, 158, 161, 1, 0, 0, 0, 159, 157, 1, 0, 0, 0, 
		    159, 160, 1, 0, 0, 0, 160, 162, 1, 0, 0, 0, 161, 159, 1, 0, 0, 0, 
		    162, 163, 5, 59, 0, 0, 163, 25, 1, 0, 0, 0, 164, 178, 3, 4, 2, 0, 
		    165, 178, 3, 6, 3, 0, 166, 178, 3, 8, 4, 0, 167, 178, 3, 28, 14, 0, 
		    168, 178, 3, 32, 16, 0, 169, 178, 3, 34, 17, 0, 170, 178, 3, 38, 19, 
		    0, 171, 178, 3, 42, 21, 0, 172, 178, 3, 46, 23, 0, 173, 178, 3, 48, 
		    24, 0, 174, 178, 3, 50, 25, 0, 175, 178, 3, 52, 26, 0, 176, 178, 3, 
		    24, 12, 0, 177, 164, 1, 0, 0, 0, 177, 165, 1, 0, 0, 0, 177, 166, 1, 
		    0, 0, 0, 177, 167, 1, 0, 0, 0, 177, 168, 1, 0, 0, 0, 177, 169, 1, 
		    0, 0, 0, 177, 170, 1, 0, 0, 0, 177, 171, 1, 0, 0, 0, 177, 172, 1, 
		    0, 0, 0, 177, 173, 1, 0, 0, 0, 177, 174, 1, 0, 0, 0, 177, 175, 1, 
		    0, 0, 0, 177, 176, 1, 0, 0, 0, 178, 27, 1, 0, 0, 0, 179, 180, 3, 54, 
		    27, 0, 180, 181, 3, 30, 15, 0, 181, 182, 3, 54, 27, 0, 182, 183, 5, 
		    62, 0, 0, 183, 29, 1, 0, 0, 0, 184, 190, 5, 32, 0, 0, 185, 190, 5, 
		    33, 0, 0, 186, 190, 5, 34, 0, 0, 187, 190, 5, 35, 0, 0, 188, 190, 
		    5, 36, 0, 0, 189, 184, 1, 0, 0, 0, 189, 185, 1, 0, 0, 0, 189, 186, 
		    1, 0, 0, 0, 189, 187, 1, 0, 0, 0, 189, 188, 1, 0, 0, 0, 190, 31, 1, 
		    0, 0, 0, 191, 192, 3, 56, 28, 0, 192, 193, 5, 52, 0, 0, 193, 194, 
		    5, 62, 0, 0, 194, 200, 1, 0, 0, 0, 195, 196, 3, 56, 28, 0, 196, 197, 
		    5, 53, 0, 0, 197, 198, 5, 62, 0, 0, 198, 200, 1, 0, 0, 0, 199, 191, 
		    1, 0, 0, 0, 199, 195, 1, 0, 0, 0, 200, 33, 1, 0, 0, 0, 201, 205, 5, 
		    10, 0, 0, 202, 203, 3, 36, 18, 0, 203, 204, 5, 62, 0, 0, 204, 206, 
		    1, 0, 0, 0, 205, 202, 1, 0, 0, 0, 205, 206, 1, 0, 0, 0, 206, 207, 
		    1, 0, 0, 0, 207, 208, 3, 56, 28, 0, 208, 214, 3, 24, 12, 0, 209, 212, 
		    5, 11, 0, 0, 210, 213, 3, 34, 17, 0, 211, 213, 3, 24, 12, 0, 212, 
		    210, 1, 0, 0, 0, 212, 211, 1, 0, 0, 0, 213, 215, 1, 0, 0, 0, 214, 
		    209, 1, 0, 0, 0, 214, 215, 1, 0, 0, 0, 215, 35, 1, 0, 0, 0, 216, 220, 
		    3, 6, 3, 0, 217, 220, 3, 28, 14, 0, 218, 220, 3, 52, 26, 0, 219, 216, 
		    1, 0, 0, 0, 219, 217, 1, 0, 0, 0, 219, 218, 1, 0, 0, 0, 220, 37, 1, 
		    0, 0, 0, 221, 225, 5, 12, 0, 0, 222, 223, 3, 36, 18, 0, 223, 224, 
		    5, 62, 0, 0, 224, 226, 1, 0, 0, 0, 225, 222, 1, 0, 0, 0, 225, 226, 
		    1, 0, 0, 0, 226, 228, 1, 0, 0, 0, 227, 229, 3, 56, 28, 0, 228, 227, 
		    1, 0, 0, 0, 228, 229, 1, 0, 0, 0, 229, 230, 1, 0, 0, 0, 230, 234, 
		    5, 58, 0, 0, 231, 233, 3, 40, 20, 0, 232, 231, 1, 0, 0, 0, 233, 236, 
		    1, 0, 0, 0, 234, 232, 1, 0, 0, 0, 234, 235, 1, 0, 0, 0, 235, 237, 
		    1, 0, 0, 0, 236, 234, 1, 0, 0, 0, 237, 238, 5, 59, 0, 0, 238, 39, 
		    1, 0, 0, 0, 239, 240, 5, 13, 0, 0, 240, 241, 3, 54, 27, 0, 241, 245, 
		    5, 61, 0, 0, 242, 244, 3, 26, 13, 0, 243, 242, 1, 0, 0, 0, 244, 247, 
		    1, 0, 0, 0, 245, 243, 1, 0, 0, 0, 245, 246, 1, 0, 0, 0, 246, 257, 
		    1, 0, 0, 0, 247, 245, 1, 0, 0, 0, 248, 249, 5, 14, 0, 0, 249, 253, 
		    5, 61, 0, 0, 250, 252, 3, 26, 13, 0, 251, 250, 1, 0, 0, 0, 252, 255, 
		    1, 0, 0, 0, 253, 251, 1, 0, 0, 0, 253, 254, 1, 0, 0, 0, 254, 257, 
		    1, 0, 0, 0, 255, 253, 1, 0, 0, 0, 256, 239, 1, 0, 0, 0, 256, 248, 
		    1, 0, 0, 0, 257, 41, 1, 0, 0, 0, 258, 261, 5, 15, 0, 0, 259, 262, 
		    3, 44, 22, 0, 260, 262, 3, 56, 28, 0, 261, 259, 1, 0, 0, 0, 261, 260, 
		    1, 0, 0, 0, 261, 262, 1, 0, 0, 0, 262, 263, 1, 0, 0, 0, 263, 264, 
		    3, 24, 12, 0, 264, 43, 1, 0, 0, 0, 265, 267, 3, 36, 18, 0, 266, 265, 
		    1, 0, 0, 0, 266, 267, 1, 0, 0, 0, 267, 268, 1, 0, 0, 0, 268, 270, 
		    5, 62, 0, 0, 269, 271, 3, 56, 28, 0, 270, 269, 1, 0, 0, 0, 270, 271, 
		    1, 0, 0, 0, 271, 272, 1, 0, 0, 0, 272, 274, 5, 62, 0, 0, 273, 275, 
		    3, 56, 28, 0, 274, 273, 1, 0, 0, 0, 274, 275, 1, 0, 0, 0, 275, 45, 
		    1, 0, 0, 0, 276, 277, 5, 16, 0, 0, 277, 278, 5, 62, 0, 0, 278, 47, 
		    1, 0, 0, 0, 279, 280, 5, 17, 0, 0, 280, 281, 5, 62, 0, 0, 281, 49, 
		    1, 0, 0, 0, 282, 284, 5, 18, 0, 0, 283, 285, 3, 54, 27, 0, 284, 283, 
		    1, 0, 0, 0, 284, 285, 1, 0, 0, 0, 285, 286, 1, 0, 0, 0, 286, 287, 
		    5, 62, 0, 0, 287, 51, 1, 0, 0, 0, 288, 289, 3, 54, 27, 0, 289, 290, 
		    5, 62, 0, 0, 290, 53, 1, 0, 0, 0, 291, 296, 3, 56, 28, 0, 292, 293, 
		    5, 60, 0, 0, 293, 295, 3, 56, 28, 0, 294, 292, 1, 0, 0, 0, 295, 298, 
		    1, 0, 0, 0, 296, 294, 1, 0, 0, 0, 296, 297, 1, 0, 0, 0, 297, 55, 1, 
		    0, 0, 0, 298, 296, 1, 0, 0, 0, 299, 300, 6, 28, -1, 0, 300, 301, 5, 
		    50, 0, 0, 301, 312, 3, 56, 28, 6, 302, 303, 5, 38, 0, 0, 303, 312, 
		    3, 56, 28, 5, 304, 305, 5, 37, 0, 0, 305, 312, 3, 56, 28, 4, 306, 
		    307, 5, 51, 0, 0, 307, 312, 3, 56, 28, 3, 308, 309, 5, 39, 0, 0, 309, 
		    312, 3, 56, 28, 2, 310, 312, 3, 58, 29, 0, 311, 299, 1, 0, 0, 0, 311, 
		    302, 1, 0, 0, 0, 311, 304, 1, 0, 0, 0, 311, 306, 1, 0, 0, 0, 311, 
		    308, 1, 0, 0, 0, 311, 310, 1, 0, 0, 0, 312, 354, 1, 0, 0, 0, 313, 
		    314, 10, 19, 0, 0, 314, 315, 5, 49, 0, 0, 315, 353, 3, 56, 28, 20, 
		    316, 317, 10, 18, 0, 0, 317, 318, 5, 48, 0, 0, 318, 353, 3, 56, 28, 
		    19, 319, 320, 10, 17, 0, 0, 320, 321, 5, 42, 0, 0, 321, 353, 3, 56, 
		    28, 18, 322, 323, 10, 16, 0, 0, 323, 324, 5, 43, 0, 0, 324, 353, 3, 
		    56, 28, 17, 325, 326, 10, 15, 0, 0, 326, 327, 5, 46, 0, 0, 327, 353, 
		    3, 56, 28, 16, 328, 329, 10, 14, 0, 0, 329, 330, 5, 47, 0, 0, 330, 
		    353, 3, 56, 28, 15, 331, 332, 10, 13, 0, 0, 332, 333, 5, 44, 0, 0, 
		    333, 353, 3, 56, 28, 14, 334, 335, 10, 12, 0, 0, 335, 336, 5, 45, 
		    0, 0, 336, 353, 3, 56, 28, 13, 337, 338, 10, 11, 0, 0, 338, 339, 5, 
		    37, 0, 0, 339, 353, 3, 56, 28, 12, 340, 341, 10, 10, 0, 0, 341, 342, 
		    5, 38, 0, 0, 342, 353, 3, 56, 28, 11, 343, 344, 10, 9, 0, 0, 344, 
		    345, 5, 39, 0, 0, 345, 353, 3, 56, 28, 10, 346, 347, 10, 8, 0, 0, 
		    347, 348, 5, 40, 0, 0, 348, 353, 3, 56, 28, 9, 349, 350, 10, 7, 0, 
		    0, 350, 351, 5, 41, 0, 0, 351, 353, 3, 56, 28, 8, 352, 313, 1, 0, 
		    0, 0, 352, 316, 1, 0, 0, 0, 352, 319, 1, 0, 0, 0, 352, 322, 1, 0, 
		    0, 0, 352, 325, 1, 0, 0, 0, 352, 328, 1, 0, 0, 0, 352, 331, 1, 0, 
		    0, 0, 352, 334, 1, 0, 0, 0, 352, 337, 1, 0, 0, 0, 352, 340, 1, 0, 
		    0, 0, 352, 343, 1, 0, 0, 0, 352, 346, 1, 0, 0, 0, 352, 349, 1, 0, 
		    0, 0, 353, 356, 1, 0, 0, 0, 354, 352, 1, 0, 0, 0, 354, 355, 1, 0, 
		    0, 0, 355, 57, 1, 0, 0, 0, 356, 354, 1, 0, 0, 0, 357, 358, 6, 29, 
		    -1, 0, 358, 367, 3, 64, 32, 0, 359, 367, 5, 27, 0, 0, 360, 367, 5, 
		    19, 0, 0, 361, 362, 5, 54, 0, 0, 362, 363, 3, 56, 28, 0, 363, 364, 
		    5, 55, 0, 0, 364, 367, 1, 0, 0, 0, 365, 367, 3, 60, 30, 0, 366, 357, 
		    1, 0, 0, 0, 366, 359, 1, 0, 0, 0, 366, 360, 1, 0, 0, 0, 366, 361, 
		    1, 0, 0, 0, 366, 365, 1, 0, 0, 0, 367, 380, 1, 0, 0, 0, 368, 369, 
		    10, 3, 0, 0, 369, 370, 5, 56, 0, 0, 370, 371, 3, 56, 28, 0, 371, 372, 
		    5, 57, 0, 0, 372, 379, 1, 0, 0, 0, 373, 374, 10, 2, 0, 0, 374, 379, 
		    3, 62, 31, 0, 375, 376, 10, 1, 0, 0, 376, 377, 5, 63, 0, 0, 377, 379, 
		    5, 27, 0, 0, 378, 368, 1, 0, 0, 0, 378, 373, 1, 0, 0, 0, 378, 375, 
		    1, 0, 0, 0, 379, 382, 1, 0, 0, 0, 380, 378, 1, 0, 0, 0, 380, 381, 
		    1, 0, 0, 0, 381, 59, 1, 0, 0, 0, 382, 380, 1, 0, 0, 0, 383, 384, 5, 
		    27, 0, 0, 384, 385, 5, 63, 0, 0, 385, 386, 5, 2, 0, 0, 386, 396, 3, 
		    62, 31, 0, 387, 388, 5, 3, 0, 0, 388, 396, 3, 62, 31, 0, 389, 390, 
		    5, 4, 0, 0, 390, 396, 3, 62, 31, 0, 391, 392, 5, 5, 0, 0, 392, 396, 
		    3, 62, 31, 0, 393, 394, 5, 6, 0, 0, 394, 396, 3, 62, 31, 0, 395, 383, 
		    1, 0, 0, 0, 395, 387, 1, 0, 0, 0, 395, 389, 1, 0, 0, 0, 395, 391, 
		    1, 0, 0, 0, 395, 393, 1, 0, 0, 0, 396, 61, 1, 0, 0, 0, 397, 399, 5, 
		    54, 0, 0, 398, 400, 3, 54, 27, 0, 399, 398, 1, 0, 0, 0, 399, 400, 
		    1, 0, 0, 0, 400, 401, 1, 0, 0, 0, 401, 402, 5, 55, 0, 0, 402, 63, 
		    1, 0, 0, 0, 403, 410, 5, 28, 0, 0, 404, 410, 5, 29, 0, 0, 405, 410, 
		    5, 30, 0, 0, 406, 410, 5, 31, 0, 0, 407, 410, 5, 25, 0, 0, 408, 410, 
		    5, 26, 0, 0, 409, 403, 1, 0, 0, 0, 409, 404, 1, 0, 0, 0, 409, 405, 
		    1, 0, 0, 0, 409, 406, 1, 0, 0, 0, 409, 407, 1, 0, 0, 0, 409, 408, 
		    1, 0, 0, 0, 410, 65, 1, 0, 0, 0, 411, 416, 5, 27, 0, 0, 412, 413, 
		    5, 60, 0, 0, 413, 415, 5, 27, 0, 0, 414, 412, 1, 0, 0, 0, 415, 418, 
		    1, 0, 0, 0, 416, 414, 1, 0, 0, 0, 416, 417, 1, 0, 0, 0, 417, 67, 1, 
		    0, 0, 0, 418, 416, 1, 0, 0, 0, 39, 71, 79, 86, 106, 110, 119, 130, 
		    137, 148, 159, 177, 189, 199, 205, 212, 214, 219, 225, 228, 234, 245, 
		    253, 256, 261, 266, 270, 274, 284, 296, 311, 352, 354, 366, 378, 380, 
		    395, 399, 409, 416];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.1', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Golampi.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function programa(): Context\ProgramaContext
		{
		    $localContext = new Context\ProgramaContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_programa);

		    try {
		        $localContext = new Context\ReglaProgramaContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(71);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 896) !== 0)) {
		        	$this->setState(68);
		        	$this->declaracion();
		        	$this->setState(73);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(74);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaracion(): Context\DeclaracionContext
		{
		    $localContext = new Context\DeclaracionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_declaracion);

		    try {
		        $this->setState(79);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::VAR:
		            	$localContext = new Context\ReglaDeclVarContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(76);
		            	$this->declVar();
		            	break;

		            case self::CONST:
		            	$localContext = new Context\ReglaDeclConstContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(77);
		            	$this->declConst();
		            	break;

		            case self::FUNC:
		            	$localContext = new Context\ReglaDeclFuncContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(78);
		            	$this->declFunc();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declVar(): Context\DeclVarContext
		{
		    $localContext = new Context\DeclVarContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_declVar);

		    try {
		        $localContext = new Context\StmtDeclVarContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(81);
		        $this->match(self::VAR);
		        $this->setState(82);
		        $this->listaId();
		        $this->setState(83);
		        $this->tipo();
		        $this->setState(86);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ASIGN) {
		        	$this->setState(84);
		        	$this->match(self::ASIGN);
		        	$this->setState(85);
		        	$this->listaExpr();
		        }
		        $this->setState(88);
		        $this->match(self::PUNTOYCOMA);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declVarCorta(): Context\DeclVarCortaContext
		{
		    $localContext = new Context\DeclVarCortaContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_declVarCorta);

		    try {
		        $localContext = new Context\StmtDeclVarCortaContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(90);
		        $this->listaId();
		        $this->setState(91);
		        $this->match(self::T__0);
		        $this->setState(92);
		        $this->listaExpr();
		        $this->setState(93);
		        $this->match(self::PUNTOYCOMA);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declConst(): Context\DeclConstContext
		{
		    $localContext = new Context\DeclConstContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_declConst);

		    try {
		        $localContext = new Context\StmtDeclConstContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(95);
		        $this->match(self::CONST);
		        $this->setState(96);
		        $this->match(self::ID);
		        $this->setState(97);
		        $this->tipo();
		        $this->setState(98);
		        $this->match(self::ASIGN);
		        $this->setState(99);
		        $this->recursiveExpresion(0);
		        $this->setState(100);
		        $this->match(self::PUNTOYCOMA);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declFunc(): Context\DeclFuncContext
		{
		    $localContext = new Context\DeclFuncContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_declFunc);

		    try {
		        $localContext = new Context\StmtDeclFuncContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(102);
		        $this->match(self::FUNC);
		        $this->setState(103);
		        $this->match(self::ID);
		        $this->setState(104);
		        $this->match(self::PARENIZQ);
		        $this->setState(106);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(105);
		        	$this->listaParam();
		        }
		        $this->setState(108);
		        $this->match(self::PARENDER);
		        $this->setState(110);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 90072542335729664) !== 0)) {
		        	$this->setState(109);
		        	$this->tipoRetorno();
		        }
		        $this->setState(112);
		        $this->bloque();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function listaParam(): Context\ListaParamContext
		{
		    $localContext = new Context\ListaParamContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_listaParam);

		    try {
		        $localContext = new Context\ReglaListaParamContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(114);
		        $this->param();
		        $this->setState(119);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMA) {
		        	$this->setState(115);
		        	$this->match(self::COMA);
		        	$this->setState(116);
		        	$this->param();
		        	$this->setState(121);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function param(): Context\ParamContext
		{
		    $localContext = new Context\ParamContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_param);

		    try {
		        $localContext = new Context\ReglaParamContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(122);
		        $this->match(self::ID);
		        $this->setState(123);
		        $this->tipo();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function tipoRetorno(): Context\TipoRetornoContext
		{
		    $localContext = new Context\TipoRetornoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_tipoRetorno);

		    try {
		        $this->setState(130);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::INT32:
		            case self::FLOAT32:
		            case self::BOOL:
		            case self::RUNE:
		            case self::STRING_TYPE:
		            case self::MULT:
		            case self::CORCHIZQ:
		            	$localContext = new Context\TipoRetornoSimpleContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(125);
		            	$this->tipo();
		            	break;

		            case self::PARENIZQ:
		            	$localContext = new Context\TipoRetornoMultipleContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(126);
		            	$this->match(self::PARENIZQ);
		            	$this->setState(127);
		            	$this->listaTipos();
		            	$this->setState(128);
		            	$this->match(self::PARENDER);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function listaTipos(): Context\ListaTiposContext
		{
		    $localContext = new Context\ListaTiposContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_listaTipos);

		    try {
		        $localContext = new Context\ReglaListaTiposContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(132);
		        $this->tipo();
		        $this->setState(137);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMA) {
		        	$this->setState(133);
		        	$this->match(self::COMA);
		        	$this->setState(134);
		        	$this->tipo();
		        	$this->setState(139);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function tipo(): Context\TipoContext
		{
		    $localContext = new Context\TipoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_tipo);

		    try {
		        $this->setState(148);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::INT32:
		            	$localContext = new Context\ReglaTipoInt32Context($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(140);
		            	$this->match(self::INT32);
		            	break;

		            case self::FLOAT32:
		            	$localContext = new Context\ReglaTipoFloat32Context($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(141);
		            	$this->match(self::FLOAT32);
		            	break;

		            case self::BOOL:
		            	$localContext = new Context\ReglaTipoBoolContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(142);
		            	$this->match(self::BOOL);
		            	break;

		            case self::RUNE:
		            	$localContext = new Context\ReglaTipoRuneContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(143);
		            	$this->match(self::RUNE);
		            	break;

		            case self::STRING_TYPE:
		            	$localContext = new Context\ReglaTipoStringContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(144);
		            	$this->match(self::STRING_TYPE);
		            	break;

		            case self::CORCHIZQ:
		            	$localContext = new Context\ReglaTipoArrayContext($localContext);
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(145);
		            	$this->tipoArray();
		            	break;

		            case self::MULT:
		            	$localContext = new Context\ReglaTipoPunteroContext($localContext);
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(146);
		            	$this->match(self::MULT);
		            	$this->setState(147);
		            	$this->tipo();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function tipoArray(): Context\TipoArrayContext
		{
		    $localContext = new Context\TipoArrayContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_tipoArray);

		    try {
		        $localContext = new Context\ReglaTipoArrayExprContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(150);
		        $this->match(self::CORCHIZQ);
		        $this->setState(151);
		        $this->recursiveExpresion(0);
		        $this->setState(152);
		        $this->match(self::CORCHDER);
		        $this->setState(153);
		        $this->tipo();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function bloque(): Context\BloqueContext
		{
		    $localContext = new Context\BloqueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_bloque);

		    try {
		        $localContext = new Context\ReglaBloqueStmtContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(155);
		        $this->match(self::LLAVEIZQ);
		        $this->setState(159);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 309623440716830200) !== 0)) {
		        	$this->setState(156);
		        	$this->sentencia();
		        	$this->setState(161);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(162);
		        $this->match(self::LLAVEDER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentencia(): Context\SentenciaContext
		{
		    $localContext = new Context\SentenciaContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_sentencia);

		    try {
		        $this->setState(177);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 10, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ReglaSentVarContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(164);
		        	    $this->declVar();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ReglaSentVarCortaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(165);
		        	    $this->declVarCorta();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ReglaSentConstContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(166);
		        	    $this->declConst();
		        	break;

		        	case 4:
		        	    $localContext = new Context\ReglaSentAsignContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(167);
		        	    $this->sentAsign();
		        	break;

		        	case 5:
		        	    $localContext = new Context\ReglaSentIncDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(168);
		        	    $this->sentIncDec();
		        	break;

		        	case 6:
		        	    $localContext = new Context\ReglaSentIfContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(169);
		        	    $this->sentIf();
		        	break;

		        	case 7:
		        	    $localContext = new Context\ReglaSentSwitchContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(170);
		        	    $this->sentSwitch();
		        	break;

		        	case 8:
		        	    $localContext = new Context\ReglaSentForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(171);
		        	    $this->sentFor();
		        	break;

		        	case 9:
		        	    $localContext = new Context\ReglaSentBreakContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(172);
		        	    $this->sentBreak();
		        	break;

		        	case 10:
		        	    $localContext = new Context\ReglaSentContinueContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(173);
		        	    $this->sentContinue();
		        	break;

		        	case 11:
		        	    $localContext = new Context\ReglaSentReturnContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(174);
		        	    $this->sentReturn();
		        	break;

		        	case 12:
		        	    $localContext = new Context\ReglaSentExprContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(175);
		        	    $this->sentExpr();
		        	break;

		        	case 13:
		        	    $localContext = new Context\ReglaSentBloqueContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(176);
		        	    $this->bloque();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentAsign(): Context\SentAsignContext
		{
		    $localContext = new Context\SentAsignContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_sentAsign);

		    try {
		        $localContext = new Context\StmtSentAsignContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(179);
		        $this->listaExpr();
		        $this->setState(180);
		        $this->opAsign();
		        $this->setState(181);
		        $this->listaExpr();
		        $this->setState(182);
		        $this->match(self::PUNTOYCOMA);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function opAsign(): Context\OpAsignContext
		{
		    $localContext = new Context\OpAsignContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_opAsign);

		    try {
		        $this->setState(189);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ASIGN:
		            	$localContext = new Context\ReglaOpAsignContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(184);
		            	$this->match(self::ASIGN);
		            	break;

		            case self::ASIGN_SUMA:
		            	$localContext = new Context\ReglaOpAsignSumaContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(185);
		            	$this->match(self::ASIGN_SUMA);
		            	break;

		            case self::ASIGN_RESTA:
		            	$localContext = new Context\ReglaOpAsignRestaContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(186);
		            	$this->match(self::ASIGN_RESTA);
		            	break;

		            case self::ASIGN_MULT:
		            	$localContext = new Context\ReglaOpAsignMultContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(187);
		            	$this->match(self::ASIGN_MULT);
		            	break;

		            case self::ASIGN_DIV:
		            	$localContext = new Context\ReglaOpAsignDivContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(188);
		            	$this->match(self::ASIGN_DIV);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentIncDec(): Context\SentIncDecContext
		{
		    $localContext = new Context\SentIncDecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_sentIncDec);

		    try {
		        $this->setState(199);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 12, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\StmtSentIncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(191);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(192);
		        	    $this->match(self::INC);
		        	    $this->setState(193);
		        	    $this->match(self::PUNTOYCOMA);
		        	break;

		        	case 2:
		        	    $localContext = new Context\StmtSentDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(195);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(196);
		        	    $this->match(self::DEC);
		        	    $this->setState(197);
		        	    $this->match(self::PUNTOYCOMA);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentIf(): Context\SentIfContext
		{
		    $localContext = new Context\SentIfContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_sentIf);

		    try {
		        $localContext = new Context\StmtSentIfElseContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(201);
		        $this->match(self::IF);
		        $this->setState(205);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
		            case 1:
		        	    $this->setState(202);
		        	    $this->sentSimple();
		        	    $this->setState(203);
		        	    $this->match(self::PUNTOYCOMA);
		        	break;
		        }
		        $this->setState(207);
		        $this->recursiveExpresion(0);
		        $this->setState(208);
		        $this->bloque();
		        $this->setState(214);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ELSE) {
		        	$this->setState(209);
		        	$this->match(self::ELSE);
		        	$this->setState(212);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::IF:
		        	    	$this->setState(210);
		        	    	$this->sentIf();
		        	    	break;

		        	    case self::LLAVEIZQ:
		        	    	$this->setState(211);
		        	    	$this->bloque();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentSimple(): Context\SentSimpleContext
		{
		    $localContext = new Context\SentSimpleContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_sentSimple);

		    try {
		        $this->setState(219);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ReglaSentSimpleVarCortaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(216);
		        	    $this->declVarCorta();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ReglaSentSimpleAsignContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(217);
		        	    $this->sentAsign();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ReglaSentSimpleExprContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(218);
		        	    $this->sentExpr();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentSwitch(): Context\SentSwitchContext
		{
		    $localContext = new Context\SentSwitchContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_sentSwitch);

		    try {
		        $localContext = new Context\ReglaSentSwitchCtxContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(221);
		        $this->match(self::SWITCH);
		        $this->setState(225);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 17, $this->ctx)) {
		            case 1:
		        	    $this->setState(222);
		        	    $this->sentSimple();
		        	    $this->setState(223);
		        	    $this->match(self::PUNTOYCOMA);
		        	break;
		        }
		        $this->setState(228);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 21393064564621432) !== 0)) {
		        	$this->setState(227);
		        	$this->recursiveExpresion(0);
		        }
		        $this->setState(230);
		        $this->match(self::LLAVEIZQ);
		        $this->setState(234);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::CASE || $_la === self::DEFAULT) {
		        	$this->setState(231);
		        	$this->clausulaCaso();
		        	$this->setState(236);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(237);
		        $this->match(self::LLAVEDER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function clausulaCaso(): Context\ClausulaCasoContext
		{
		    $localContext = new Context\ClausulaCasoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_clausulaCaso);

		    try {
		        $this->setState(256);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::CASE:
		            	$localContext = new Context\ReglaClausulaCasoContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(239);
		            	$this->match(self::CASE);
		            	$this->setState(240);
		            	$this->listaExpr();
		            	$this->setState(241);
		            	$this->match(self::DOSPUNTOS);
		            	$this->setState(245);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 309623440716830200) !== 0)) {
		            		$this->setState(242);
		            		$this->sentencia();
		            		$this->setState(247);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	break;

		            case self::DEFAULT:
		            	$localContext = new Context\ReglaClausulaDefaultContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(248);
		            	$this->match(self::DEFAULT);
		            	$this->setState(249);
		            	$this->match(self::DOSPUNTOS);
		            	$this->setState(253);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 309623440716830200) !== 0)) {
		            		$this->setState(250);
		            		$this->sentencia();
		            		$this->setState(255);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentFor(): Context\SentForContext
		{
		    $localContext = new Context\SentForContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_sentFor);

		    try {
		        $localContext = new Context\ReglaSentForCtxContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(258);
		        $this->match(self::FOR);
		        $this->setState(261);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx)) {
		            case 1:
		        	    $this->setState(259);
		        	    $this->clausulaFor();
		        	break;

		            case 2:
		        	    $this->setState(260);
		        	    $this->recursiveExpresion(0);
		        	break;
		        }
		        $this->setState(263);
		        $this->bloque();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function clausulaFor(): Context\ClausulaForContext
		{
		    $localContext = new Context\ClausulaForContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_clausulaFor);

		    try {
		        $localContext = new Context\ReglaClausulaForContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(266);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 21393064564621432) !== 0)) {
		        	$this->setState(265);
		        	$this->sentSimple();
		        }
		        $this->setState(268);
		        $this->match(self::PUNTOYCOMA);
		        $this->setState(270);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 21393064564621432) !== 0)) {
		        	$this->setState(269);
		        	$this->recursiveExpresion(0);
		        }
		        $this->setState(272);
		        $this->match(self::PUNTOYCOMA);
		        $this->setState(274);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 21393064564621432) !== 0)) {
		        	$this->setState(273);
		        	$this->recursiveExpresion(0);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentBreak(): Context\SentBreakContext
		{
		    $localContext = new Context\SentBreakContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_sentBreak);

		    try {
		        $localContext = new Context\ReglaSentBreakCtxContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(276);
		        $this->match(self::BREAK);
		        $this->setState(277);
		        $this->match(self::PUNTOYCOMA);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentContinue(): Context\SentContinueContext
		{
		    $localContext = new Context\SentContinueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_sentContinue);

		    try {
		        $localContext = new Context\ReglaSentContinueCtxContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(279);
		        $this->match(self::CONTINUE);
		        $this->setState(280);
		        $this->match(self::PUNTOYCOMA);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentReturn(): Context\SentReturnContext
		{
		    $localContext = new Context\SentReturnContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_sentReturn);

		    try {
		        $localContext = new Context\ReglaSentReturnCtxContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(282);
		        $this->match(self::RETURN);
		        $this->setState(284);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 21393064564621432) !== 0)) {
		        	$this->setState(283);
		        	$this->listaExpr();
		        }
		        $this->setState(286);
		        $this->match(self::PUNTOYCOMA);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function sentExpr(): Context\SentExprContext
		{
		    $localContext = new Context\SentExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_sentExpr);

		    try {
		        $localContext = new Context\ReglaSentExprCtxContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(288);
		        $this->listaExpr();
		        $this->setState(289);
		        $this->match(self::PUNTOYCOMA);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function listaExpr(): Context\ListaExprContext
		{
		    $localContext = new Context\ListaExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_listaExpr);

		    try {
		        $localContext = new Context\ReglaListaExprContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(291);
		        $this->recursiveExpresion(0);
		        $this->setState(296);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMA) {
		        	$this->setState(292);
		        	$this->match(self::COMA);
		        	$this->setState(293);
		        	$this->recursiveExpresion(0);
		        	$this->setState(298);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expresion(): Context\ExpresionContext
		{
			return $this->recursiveExpresion(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveExpresion(int $precedence): Context\ExpresionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\ExpresionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 56;
			$this->enterRecursionRule($localContext, 56, self::RULE_expresion, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(311);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::NOT:
				    	$localContext = new Context\ReglaExprNotContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(300);
				    	$this->match(self::NOT);
				    	$this->setState(301);
				    	$this->recursiveExpresion(6);
				    	break;

				    case self::RESTA:
				    	$localContext = new Context\ReglaExprMenosUnarioContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(302);
				    	$this->match(self::RESTA);
				    	$this->setState(303);
				    	$this->recursiveExpresion(5);
				    	break;

				    case self::SUMA:
				    	$localContext = new Context\ReglaExprMasUnarioContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(304);
				    	$this->match(self::SUMA);
				    	$this->setState(305);
				    	$this->recursiveExpresion(4);
				    	break;

				    case self::ADDR:
				    	$localContext = new Context\ReglaExprDireccionContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(306);
				    	$this->match(self::ADDR);
				    	$this->setState(307);
				    	$this->recursiveExpresion(3);
				    	break;

				    case self::MULT:
				    	$localContext = new Context\ReglaExprDesreferenciaContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(308);
				    	$this->match(self::MULT);
				    	$this->setState(309);
				    	$this->recursiveExpresion(2);
				    	break;

				    case self::T__2:
				    case self::T__3:
				    case self::T__4:
				    case self::T__5:
				    case self::NIL:
				    case self::TRUE:
				    case self::FALSE:
				    case self::ID:
				    case self::ENTERO_LITERAL:
				    case self::FLOTANTE_LITERAL:
				    case self::CADENA_LITERAL:
				    case self::RUNA_LITERAL:
				    case self::PARENIZQ:
				    	$localContext = new Context\ReglaExprPrimarioContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(310);
				    	$this->recursivePrimario(0);
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(354);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(352);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx)) {
							case 1:
							    $localContext = new Context\ReglaExprOrLogicoContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(313);

							    if (!($this->precpred($this->ctx, 19))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 19)");
							    }
							    $this->setState(314);
							    $this->match(self::OR);
							    $this->setState(315);
							    $this->recursiveExpresion(20);
							break;

							case 2:
							    $localContext = new Context\ReglaExprAndLogicoContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(316);

							    if (!($this->precpred($this->ctx, 18))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 18)");
							    }
							    $this->setState(317);
							    $this->match(self::AND);
							    $this->setState(318);
							    $this->recursiveExpresion(19);
							break;

							case 3:
							    $localContext = new Context\ReglaExprIgualdadContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(319);

							    if (!($this->precpred($this->ctx, 17))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 17)");
							    }
							    $this->setState(320);
							    $this->match(self::EQ);
							    $this->setState(321);
							    $this->recursiveExpresion(18);
							break;

							case 4:
							    $localContext = new Context\ReglaExprDesigualdadContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(322);

							    if (!($this->precpred($this->ctx, 16))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 16)");
							    }
							    $this->setState(323);
							    $this->match(self::NEQ);
							    $this->setState(324);
							    $this->recursiveExpresion(17);
							break;

							case 5:
							    $localContext = new Context\ReglaExprMayorContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(325);

							    if (!($this->precpred($this->ctx, 15))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 15)");
							    }
							    $this->setState(326);
							    $this->match(self::GT);
							    $this->setState(327);
							    $this->recursiveExpresion(16);
							break;

							case 6:
							    $localContext = new Context\ReglaExprMayorIgualContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(328);

							    if (!($this->precpred($this->ctx, 14))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 14)");
							    }
							    $this->setState(329);
							    $this->match(self::GTE);
							    $this->setState(330);
							    $this->recursiveExpresion(15);
							break;

							case 7:
							    $localContext = new Context\ReglaExprMenorContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(331);

							    if (!($this->precpred($this->ctx, 13))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 13)");
							    }
							    $this->setState(332);
							    $this->match(self::LT);
							    $this->setState(333);
							    $this->recursiveExpresion(14);
							break;

							case 8:
							    $localContext = new Context\ReglaExprMenorIgualContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(334);

							    if (!($this->precpred($this->ctx, 12))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 12)");
							    }
							    $this->setState(335);
							    $this->match(self::LTE);
							    $this->setState(336);
							    $this->recursiveExpresion(13);
							break;

							case 9:
							    $localContext = new Context\ReglaExprSumaContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(337);

							    if (!($this->precpred($this->ctx, 11))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 11)");
							    }
							    $this->setState(338);
							    $this->match(self::SUMA);
							    $this->setState(339);
							    $this->recursiveExpresion(12);
							break;

							case 10:
							    $localContext = new Context\ReglaExprRestaContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(340);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(341);
							    $this->match(self::RESTA);
							    $this->setState(342);
							    $this->recursiveExpresion(11);
							break;

							case 11:
							    $localContext = new Context\ReglaExprMultContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(343);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(344);
							    $this->match(self::MULT);
							    $this->setState(345);
							    $this->recursiveExpresion(10);
							break;

							case 12:
							    $localContext = new Context\ReglaExprDivContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(346);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(347);
							    $this->match(self::DIV);
							    $this->setState(348);
							    $this->recursiveExpresion(9);
							break;

							case 13:
							    $localContext = new Context\ReglaExprModContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(349);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(350);
							    $this->match(self::MOD);
							    $this->setState(351);
							    $this->recursiveExpresion(8);
							break;
						} 
					}

					$this->setState(356);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function primario(): Context\PrimarioContext
		{
			return $this->recursivePrimario(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursivePrimario(int $precedence): Context\PrimarioContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\PrimarioContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 58;
			$this->enterRecursionRule($localContext, 58, self::RULE_primario, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(366);
				$this->errorHandler->sync($this);

				switch ($this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx)) {
					case 1:
					    $localContext = new Context\ReglaPrimarioLiteralContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;

					    $this->setState(358);
					    $this->literal();
					break;

					case 2:
					    $localContext = new Context\ReglaPrimarioIdContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(359);
					    $this->match(self::ID);
					break;

					case 3:
					    $localContext = new Context\ReglaPrimarioNilContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(360);
					    $this->match(self::NIL);
					break;

					case 4:
					    $localContext = new Context\ReglaPrimarioParentesisContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(361);
					    $this->match(self::PARENIZQ);
					    $this->setState(362);
					    $this->recursiveExpresion(0);
					    $this->setState(363);
					    $this->match(self::PARENDER);
					break;

					case 5:
					    $localContext = new Context\ReglaPrimarioLlamadaBuiltInContext($localContext);
					    $this->ctx = $localContext;
					    $previousContext = $localContext;
					    $this->setState(365);
					    $this->llamadaBuiltIn();
					break;
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(380);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 34, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(378);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 33, $this->ctx)) {
							case 1:
							    $localContext = new Context\ReglaPrimarioIndiceContext(new Context\PrimarioContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_primario);
							    $this->setState(368);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(369);
							    $this->match(self::CORCHIZQ);
							    $this->setState(370);
							    $this->recursiveExpresion(0);
							    $this->setState(371);
							    $this->match(self::CORCHDER);
							break;

							case 2:
							    $localContext = new Context\ReglaPrimarioLlamadaContext(new Context\PrimarioContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_primario);
							    $this->setState(373);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(374);
							    $this->argumentos();
							break;

							case 3:
							    $localContext = new Context\ReglaPrimarioMiembroContext(new Context\PrimarioContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_primario);
							    $this->setState(375);

							    if (!($this->precpred($this->ctx, 1))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 1)");
							    }
							    $this->setState(376);
							    $this->match(self::PUNTO);
							    $this->setState(377);
							    $this->match(self::ID);
							break;
						} 
					}

					$this->setState(382);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 34, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function llamadaBuiltIn(): Context\LlamadaBuiltInContext
		{
		    $localContext = new Context\LlamadaBuiltInContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_llamadaBuiltIn);

		    try {
		        $this->setState(395);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ID:
		            	$localContext = new Context\ReglaLlamadaPrintlnContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(383);
		            	$this->match(self::ID);
		            	$this->setState(384);
		            	$this->match(self::PUNTO);
		            	$this->setState(385);
		            	$this->match(self::T__1);
		            	$this->setState(386);
		            	$this->argumentos();
		            	break;

		            case self::T__2:
		            	$localContext = new Context\ReglaLlamadaLenContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(387);
		            	$this->match(self::T__2);
		            	$this->setState(388);
		            	$this->argumentos();
		            	break;

		            case self::T__3:
		            	$localContext = new Context\ReglaLlamadaNowContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(389);
		            	$this->match(self::T__3);
		            	$this->setState(390);
		            	$this->argumentos();
		            	break;

		            case self::T__4:
		            	$localContext = new Context\ReglaLlamadaSubstrContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(391);
		            	$this->match(self::T__4);
		            	$this->setState(392);
		            	$this->argumentos();
		            	break;

		            case self::T__5:
		            	$localContext = new Context\ReglaLlamadaTypeOfContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(393);
		            	$this->match(self::T__5);
		            	$this->setState(394);
		            	$this->argumentos();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function argumentos(): Context\ArgumentosContext
		{
		    $localContext = new Context\ArgumentosContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_argumentos);

		    try {
		        $localContext = new Context\ReglaArgumentosContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(397);
		        $this->match(self::PARENIZQ);
		        $this->setState(399);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 21393064564621432) !== 0)) {
		        	$this->setState(398);
		        	$this->listaExpr();
		        }
		        $this->setState(401);
		        $this->match(self::PARENDER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literal(): Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_literal);

		    try {
		        $this->setState(409);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ENTERO_LITERAL:
		            	$localContext = new Context\ReglaLiteralEnteroContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(403);
		            	$this->match(self::ENTERO_LITERAL);
		            	break;

		            case self::FLOTANTE_LITERAL:
		            	$localContext = new Context\ReglaLiteralFlotanteContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(404);
		            	$this->match(self::FLOTANTE_LITERAL);
		            	break;

		            case self::CADENA_LITERAL:
		            	$localContext = new Context\ReglaLiteralCadenaContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(405);
		            	$this->match(self::CADENA_LITERAL);
		            	break;

		            case self::RUNA_LITERAL:
		            	$localContext = new Context\ReglaLiteralRunaContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(406);
		            	$this->match(self::RUNA_LITERAL);
		            	break;

		            case self::TRUE:
		            	$localContext = new Context\ReglaLiteralVerdaderoContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(407);
		            	$this->match(self::TRUE);
		            	break;

		            case self::FALSE:
		            	$localContext = new Context\ReglaLiteralFalsoContext($localContext);
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(408);
		            	$this->match(self::FALSE);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function listaId(): Context\ListaIdContext
		{
		    $localContext = new Context\ListaIdContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_listaId);

		    try {
		        $localContext = new Context\ReglaListaIdContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(411);
		        $this->match(self::ID);
		        $this->setState(416);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMA) {
		        	$this->setState(412);
		        	$this->match(self::COMA);
		        	$this->setState(413);
		        	$this->match(self::ID);
		        	$this->setState(418);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 28:
						return $this->sempredExpresion($localContext, $predicateIndex);

					case 29:
						return $this->sempredPrimario($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredExpresion(?Context\ExpresionContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 19);

			    case 1:
			        return $this->precpred($this->ctx, 18);

			    case 2:
			        return $this->precpred($this->ctx, 17);

			    case 3:
			        return $this->precpred($this->ctx, 16);

			    case 4:
			        return $this->precpred($this->ctx, 15);

			    case 5:
			        return $this->precpred($this->ctx, 14);

			    case 6:
			        return $this->precpred($this->ctx, 13);

			    case 7:
			        return $this->precpred($this->ctx, 12);

			    case 8:
			        return $this->precpred($this->ctx, 11);

			    case 9:
			        return $this->precpred($this->ctx, 10);

			    case 10:
			        return $this->precpred($this->ctx, 9);

			    case 11:
			        return $this->precpred($this->ctx, 8);

			    case 12:
			        return $this->precpred($this->ctx, 7);
			}

			return true;
		}

		private function sempredPrimario(?Context\PrimarioContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 13:
			        return $this->precpred($this->ctx, 3);

			    case 14:
			        return $this->precpred($this->ctx, 2);

			    case 15:
			        return $this->precpred($this->ctx, 1);
			}

			return true;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use GolampiParser;
	use GolampiListener;

	class ProgramaContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_programa;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaProgramaContext extends ProgramaContext
	{
		public function __construct(ProgramaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::EOF, 0);
	    }

	    /**
	     * @return array<DeclaracionContext>|DeclaracionContext|null
	     */
	    public function declaracion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(DeclaracionContext::class);
	    	}

	        return $this->getTypedRuleContext(DeclaracionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrograma($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrograma($this);
		    }
		}
	} 

	class DeclaracionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_declaracion;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaDeclVarContext extends DeclaracionContext
	{
		public function __construct(DeclaracionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declVar(): ?DeclVarContext
	    {
	    	return $this->getTypedRuleContext(DeclVarContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaDeclVar($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaDeclVar($this);
		    }
		}
	}

	class ReglaDeclConstContext extends DeclaracionContext
	{
		public function __construct(DeclaracionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declConst(): ?DeclConstContext
	    {
	    	return $this->getTypedRuleContext(DeclConstContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaDeclConst($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaDeclConst($this);
		    }
		}
	}

	class ReglaDeclFuncContext extends DeclaracionContext
	{
		public function __construct(DeclaracionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declFunc(): ?DeclFuncContext
	    {
	    	return $this->getTypedRuleContext(DeclFuncContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaDeclFunc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaDeclFunc($this);
		    }
		}
	} 

	class DeclVarContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_declVar;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class StmtDeclVarContext extends DeclVarContext
	{
		public function __construct(DeclVarContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function VAR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::VAR, 0);
	    }

	    public function listaId(): ?ListaIdContext
	    {
	    	return $this->getTypedRuleContext(ListaIdContext::class, 0);
	    }

	    public function tipo(): ?TipoContext
	    {
	    	return $this->getTypedRuleContext(TipoContext::class, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
	    }

	    public function ASIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ASIGN, 0);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStmtDeclVar($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStmtDeclVar($this);
		    }
		}
	} 

	class DeclVarCortaContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_declVarCorta;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class StmtDeclVarCortaContext extends DeclVarCortaContext
	{
		public function __construct(DeclVarCortaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function listaId(): ?ListaIdContext
	    {
	    	return $this->getTypedRuleContext(ListaIdContext::class, 0);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStmtDeclVarCorta($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStmtDeclVarCorta($this);
		    }
		}
	} 

	class DeclConstContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_declConst;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class StmtDeclConstContext extends DeclConstContext
	{
		public function __construct(DeclConstContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CONST(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CONST, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function tipo(): ?TipoContext
	    {
	    	return $this->getTypedRuleContext(TipoContext::class, 0);
	    }

	    public function ASIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ASIGN, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStmtDeclConst($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStmtDeclConst($this);
		    }
		}
	} 

	class DeclFuncContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_declFunc;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class StmtDeclFuncContext extends DeclFuncContext
	{
		public function __construct(DeclFuncContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FUNC(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FUNC, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function PARENIZQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENIZQ, 0);
	    }

	    public function PARENDER(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENDER, 0);
	    }

	    public function bloque(): ?BloqueContext
	    {
	    	return $this->getTypedRuleContext(BloqueContext::class, 0);
	    }

	    public function listaParam(): ?ListaParamContext
	    {
	    	return $this->getTypedRuleContext(ListaParamContext::class, 0);
	    }

	    public function tipoRetorno(): ?TipoRetornoContext
	    {
	    	return $this->getTypedRuleContext(TipoRetornoContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStmtDeclFunc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStmtDeclFunc($this);
		    }
		}
	} 

	class ListaParamContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_listaParam;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaListaParamContext extends ListaParamContext
	{
		public function __construct(ListaParamContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ParamContext>|ParamContext|null
	     */
	    public function param(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParamContext::class);
	    	}

	        return $this->getTypedRuleContext(ParamContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::COMA);
	    	}

	        return $this->getToken(GolampiParser::COMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaListaParam($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaListaParam($this);
		    }
		}
	} 

	class ParamContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_param;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaParamContext extends ParamContext
	{
		public function __construct(ParamContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function tipo(): ?TipoContext
	    {
	    	return $this->getTypedRuleContext(TipoContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaParam($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaParam($this);
		    }
		}
	} 

	class TipoRetornoContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_tipoRetorno;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class TipoRetornoMultipleContext extends TipoRetornoContext
	{
		public function __construct(TipoRetornoContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PARENIZQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENIZQ, 0);
	    }

	    public function listaTipos(): ?ListaTiposContext
	    {
	    	return $this->getTypedRuleContext(ListaTiposContext::class, 0);
	    }

	    public function PARENDER(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENDER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterTipoRetornoMultiple($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitTipoRetornoMultiple($this);
		    }
		}
	}

	class TipoRetornoSimpleContext extends TipoRetornoContext
	{
		public function __construct(TipoRetornoContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function tipo(): ?TipoContext
	    {
	    	return $this->getTypedRuleContext(TipoContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterTipoRetornoSimple($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitTipoRetornoSimple($this);
		    }
		}
	} 

	class ListaTiposContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_listaTipos;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaListaTiposContext extends ListaTiposContext
	{
		public function __construct(ListaTiposContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<TipoContext>|TipoContext|null
	     */
	    public function tipo(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TipoContext::class);
	    	}

	        return $this->getTypedRuleContext(TipoContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::COMA);
	    	}

	        return $this->getToken(GolampiParser::COMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaListaTipos($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaListaTipos($this);
		    }
		}
	} 

	class TipoContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_tipo;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaTipoInt32Context extends TipoContext
	{
		public function __construct(TipoContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function INT32(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INT32, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaTipoInt32($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaTipoInt32($this);
		    }
		}
	}

	class ReglaTipoBoolContext extends TipoContext
	{
		public function __construct(TipoContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function BOOL(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::BOOL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaTipoBool($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaTipoBool($this);
		    }
		}
	}

	class ReglaTipoRuneContext extends TipoContext
	{
		public function __construct(TipoContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RUNE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RUNE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaTipoRune($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaTipoRune($this);
		    }
		}
	}

	class ReglaTipoStringContext extends TipoContext
	{
		public function __construct(TipoContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function STRING_TYPE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::STRING_TYPE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaTipoString($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaTipoString($this);
		    }
		}
	}

	class ReglaTipoFloat32Context extends TipoContext
	{
		public function __construct(TipoContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FLOAT32(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FLOAT32, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaTipoFloat32($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaTipoFloat32($this);
		    }
		}
	}

	class ReglaTipoPunteroContext extends TipoContext
	{
		public function __construct(TipoContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MULT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::MULT, 0);
	    }

	    public function tipo(): ?TipoContext
	    {
	    	return $this->getTypedRuleContext(TipoContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaTipoPuntero($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaTipoPuntero($this);
		    }
		}
	}

	class ReglaTipoArrayContext extends TipoContext
	{
		public function __construct(TipoContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function tipoArray(): ?TipoArrayContext
	    {
	    	return $this->getTypedRuleContext(TipoArrayContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaTipoArray($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaTipoArray($this);
		    }
		}
	} 

	class TipoArrayContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_tipoArray;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaTipoArrayExprContext extends TipoArrayContext
	{
		public function __construct(TipoArrayContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CORCHIZQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CORCHIZQ, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function CORCHDER(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CORCHDER, 0);
	    }

	    public function tipo(): ?TipoContext
	    {
	    	return $this->getTypedRuleContext(TipoContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaTipoArrayExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaTipoArrayExpr($this);
		    }
		}
	} 

	class BloqueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_bloque;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaBloqueStmtContext extends BloqueContext
	{
		public function __construct(BloqueContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LLAVEIZQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::LLAVEIZQ, 0);
	    }

	    public function LLAVEDER(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::LLAVEDER, 0);
	    }

	    /**
	     * @return array<SentenciaContext>|SentenciaContext|null
	     */
	    public function sentencia(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SentenciaContext::class);
	    	}

	        return $this->getTypedRuleContext(SentenciaContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaBloqueStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaBloqueStmt($this);
		    }
		}
	} 

	class SentenciaContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_sentencia;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaSentReturnContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentReturn(): ?SentReturnContext
	    {
	    	return $this->getTypedRuleContext(SentReturnContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentReturn($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentReturn($this);
		    }
		}
	}

	class ReglaSentVarContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declVar(): ?DeclVarContext
	    {
	    	return $this->getTypedRuleContext(DeclVarContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentVar($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentVar($this);
		    }
		}
	}

	class ReglaSentAsignContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentAsign(): ?SentAsignContext
	    {
	    	return $this->getTypedRuleContext(SentAsignContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentAsign($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentAsign($this);
		    }
		}
	}

	class ReglaSentSwitchContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentSwitch(): ?SentSwitchContext
	    {
	    	return $this->getTypedRuleContext(SentSwitchContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentSwitch($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentSwitch($this);
		    }
		}
	}

	class ReglaSentForContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentFor(): ?SentForContext
	    {
	    	return $this->getTypedRuleContext(SentForContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentFor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentFor($this);
		    }
		}
	}

	class ReglaSentVarCortaContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declVarCorta(): ?DeclVarCortaContext
	    {
	    	return $this->getTypedRuleContext(DeclVarCortaContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentVarCorta($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentVarCorta($this);
		    }
		}
	}

	class ReglaSentContinueContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentContinue(): ?SentContinueContext
	    {
	    	return $this->getTypedRuleContext(SentContinueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentContinue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentContinue($this);
		    }
		}
	}

	class ReglaSentConstContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declConst(): ?DeclConstContext
	    {
	    	return $this->getTypedRuleContext(DeclConstContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentConst($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentConst($this);
		    }
		}
	}

	class ReglaSentIncDecContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentIncDec(): ?SentIncDecContext
	    {
	    	return $this->getTypedRuleContext(SentIncDecContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentIncDec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentIncDec($this);
		    }
		}
	}

	class ReglaSentIfContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentIf(): ?SentIfContext
	    {
	    	return $this->getTypedRuleContext(SentIfContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentIf($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentIf($this);
		    }
		}
	}

	class ReglaSentBreakContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentBreak(): ?SentBreakContext
	    {
	    	return $this->getTypedRuleContext(SentBreakContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentBreak($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentBreak($this);
		    }
		}
	}

	class ReglaSentExprContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentExpr(): ?SentExprContext
	    {
	    	return $this->getTypedRuleContext(SentExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentExpr($this);
		    }
		}
	}

	class ReglaSentBloqueContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function bloque(): ?BloqueContext
	    {
	    	return $this->getTypedRuleContext(BloqueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentBloque($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentBloque($this);
		    }
		}
	} 

	class SentAsignContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_sentAsign;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class StmtSentAsignContext extends SentAsignContext
	{
		public function __construct(SentAsignContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ListaExprContext>|ListaExprContext|null
	     */
	    public function listaExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ListaExprContext::class);
	    	}

	        return $this->getTypedRuleContext(ListaExprContext::class, $index);
	    }

	    public function opAsign(): ?OpAsignContext
	    {
	    	return $this->getTypedRuleContext(OpAsignContext::class, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStmtSentAsign($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStmtSentAsign($this);
		    }
		}
	} 

	class OpAsignContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_opAsign;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaOpAsignRestaContext extends OpAsignContext
	{
		public function __construct(OpAsignContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ASIGN_RESTA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ASIGN_RESTA, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaOpAsignResta($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaOpAsignResta($this);
		    }
		}
	}

	class ReglaOpAsignSumaContext extends OpAsignContext
	{
		public function __construct(OpAsignContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ASIGN_SUMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ASIGN_SUMA, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaOpAsignSuma($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaOpAsignSuma($this);
		    }
		}
	}

	class ReglaOpAsignDivContext extends OpAsignContext
	{
		public function __construct(OpAsignContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ASIGN_DIV(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ASIGN_DIV, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaOpAsignDiv($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaOpAsignDiv($this);
		    }
		}
	}

	class ReglaOpAsignContext extends OpAsignContext
	{
		public function __construct(OpAsignContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ASIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ASIGN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaOpAsign($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaOpAsign($this);
		    }
		}
	}

	class ReglaOpAsignMultContext extends OpAsignContext
	{
		public function __construct(OpAsignContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ASIGN_MULT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ASIGN_MULT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaOpAsignMult($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaOpAsignMult($this);
		    }
		}
	} 

	class SentIncDecContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_sentIncDec;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class StmtSentIncContext extends SentIncDecContext
	{
		public function __construct(SentIncDecContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function INC(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INC, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStmtSentInc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStmtSentInc($this);
		    }
		}
	}

	class StmtSentDecContext extends SentIncDecContext
	{
		public function __construct(SentIncDecContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function DEC(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::DEC, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStmtSentDec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStmtSentDec($this);
		    }
		}
	} 

	class SentIfContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_sentIf;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class StmtSentIfElseContext extends SentIfContext
	{
		public function __construct(SentIfContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function IF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::IF, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    /**
	     * @return array<BloqueContext>|BloqueContext|null
	     */
	    public function bloque(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(BloqueContext::class);
	    	}

	        return $this->getTypedRuleContext(BloqueContext::class, $index);
	    }

	    public function sentSimple(): ?SentSimpleContext
	    {
	    	return $this->getTypedRuleContext(SentSimpleContext::class, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ELSE, 0);
	    }

	    public function sentIf(): ?SentIfContext
	    {
	    	return $this->getTypedRuleContext(SentIfContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStmtSentIfElse($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStmtSentIfElse($this);
		    }
		}
	} 

	class SentSimpleContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_sentSimple;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaSentSimpleExprContext extends SentSimpleContext
	{
		public function __construct(SentSimpleContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentExpr(): ?SentExprContext
	    {
	    	return $this->getTypedRuleContext(SentExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentSimpleExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentSimpleExpr($this);
		    }
		}
	}

	class ReglaSentSimpleAsignContext extends SentSimpleContext
	{
		public function __construct(SentSimpleContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function sentAsign(): ?SentAsignContext
	    {
	    	return $this->getTypedRuleContext(SentAsignContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentSimpleAsign($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentSimpleAsign($this);
		    }
		}
	}

	class ReglaSentSimpleVarCortaContext extends SentSimpleContext
	{
		public function __construct(SentSimpleContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function declVarCorta(): ?DeclVarCortaContext
	    {
	    	return $this->getTypedRuleContext(DeclVarCortaContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentSimpleVarCorta($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentSimpleVarCorta($this);
		    }
		}
	} 

	class SentSwitchContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_sentSwitch;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaSentSwitchCtxContext extends SentSwitchContext
	{
		public function __construct(SentSwitchContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function SWITCH(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::SWITCH, 0);
	    }

	    public function LLAVEIZQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::LLAVEIZQ, 0);
	    }

	    public function LLAVEDER(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::LLAVEDER, 0);
	    }

	    public function sentSimple(): ?SentSimpleContext
	    {
	    	return $this->getTypedRuleContext(SentSimpleContext::class, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    /**
	     * @return array<ClausulaCasoContext>|ClausulaCasoContext|null
	     */
	    public function clausulaCaso(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ClausulaCasoContext::class);
	    	}

	        return $this->getTypedRuleContext(ClausulaCasoContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentSwitchCtx($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentSwitchCtx($this);
		    }
		}
	} 

	class ClausulaCasoContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_clausulaCaso;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaClausulaDefaultContext extends ClausulaCasoContext
	{
		public function __construct(ClausulaCasoContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function DEFAULT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::DEFAULT, 0);
	    }

	    public function DOSPUNTOS(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::DOSPUNTOS, 0);
	    }

	    /**
	     * @return array<SentenciaContext>|SentenciaContext|null
	     */
	    public function sentencia(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SentenciaContext::class);
	    	}

	        return $this->getTypedRuleContext(SentenciaContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaClausulaDefault($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaClausulaDefault($this);
		    }
		}
	}

	class ReglaClausulaCasoContext extends ClausulaCasoContext
	{
		public function __construct(ClausulaCasoContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CASE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CASE, 0);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

	    public function DOSPUNTOS(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::DOSPUNTOS, 0);
	    }

	    /**
	     * @return array<SentenciaContext>|SentenciaContext|null
	     */
	    public function sentencia(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SentenciaContext::class);
	    	}

	        return $this->getTypedRuleContext(SentenciaContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaClausulaCaso($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaClausulaCaso($this);
		    }
		}
	} 

	class SentForContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_sentFor;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaSentForCtxContext extends SentForContext
	{
		public function __construct(SentForContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FOR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FOR, 0);
	    }

	    public function bloque(): ?BloqueContext
	    {
	    	return $this->getTypedRuleContext(BloqueContext::class, 0);
	    }

	    public function clausulaFor(): ?ClausulaForContext
	    {
	    	return $this->getTypedRuleContext(ClausulaForContext::class, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentForCtx($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentForCtx($this);
		    }
		}
	} 

	class ClausulaForContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_clausulaFor;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaClausulaForContext extends ClausulaForContext
	{
		public function __construct(ClausulaForContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function PUNTOYCOMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::PUNTOYCOMA);
	    	}

	        return $this->getToken(GolampiParser::PUNTOYCOMA, $index);
	    }

	    public function sentSimple(): ?SentSimpleContext
	    {
	    	return $this->getTypedRuleContext(SentSimpleContext::class, 0);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaClausulaFor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaClausulaFor($this);
		    }
		}
	} 

	class SentBreakContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_sentBreak;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaSentBreakCtxContext extends SentBreakContext
	{
		public function __construct(SentBreakContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function BREAK(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::BREAK, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentBreakCtx($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentBreakCtx($this);
		    }
		}
	} 

	class SentContinueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_sentContinue;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaSentContinueCtxContext extends SentContinueContext
	{
		public function __construct(SentContinueContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CONTINUE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CONTINUE, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentContinueCtx($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentContinueCtx($this);
		    }
		}
	} 

	class SentReturnContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_sentReturn;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaSentReturnCtxContext extends SentReturnContext
	{
		public function __construct(SentReturnContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RETURN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RETURN, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentReturnCtx($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentReturnCtx($this);
		    }
		}
	} 

	class SentExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_sentExpr;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaSentExprCtxContext extends SentExprContext
	{
		public function __construct(SentExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaSentExprCtx($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentExprCtx($this);
		    }
		}
	} 

	class ListaExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_listaExpr;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaListaExprContext extends ListaExprContext
	{
		public function __construct(ListaExprContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::COMA);
	    	}

	        return $this->getToken(GolampiParser::COMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaListaExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaListaExpr($this);
		    }
		}
	} 

	class ExpresionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_expresion;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaExprDivContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function DIV(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::DIV, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprDiv($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprDiv($this);
		    }
		}
	}

	class ReglaExprNotContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NOT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::NOT, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprNot($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprNot($this);
		    }
		}
	}

	class ReglaExprDesigualdadContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function NEQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::NEQ, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprDesigualdad($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprDesigualdad($this);
		    }
		}
	}

	class ReglaExprAndLogicoContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function AND(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::AND, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprAndLogico($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprAndLogico($this);
		    }
		}
	}

	class ReglaExprMenorContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function LT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::LT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprMenor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprMenor($this);
		    }
		}
	}

	class ReglaExprMultContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function MULT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::MULT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprMult($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprMult($this);
		    }
		}
	}

	class ReglaExprDesreferenciaContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function MULT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::MULT, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprDesreferencia($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprDesreferencia($this);
		    }
		}
	}

	class ReglaExprMasUnarioContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function SUMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::SUMA, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprMasUnario($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprMasUnario($this);
		    }
		}
	}

	class ReglaExprIgualdadContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function EQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::EQ, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprIgualdad($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprIgualdad($this);
		    }
		}
	}

	class ReglaExprSumaContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function SUMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::SUMA, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprSuma($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprSuma($this);
		    }
		}
	}

	class ReglaExprMayorIgualContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function GTE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::GTE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprMayorIgual($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprMayorIgual($this);
		    }
		}
	}

	class ReglaExprMenorIgualContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function LTE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::LTE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprMenorIgual($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprMenorIgual($this);
		    }
		}
	}

	class ReglaExprModContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function MOD(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::MOD, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprMod($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprMod($this);
		    }
		}
	}

	class ReglaExprMenosUnarioContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RESTA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RESTA, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprMenosUnario($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprMenosUnario($this);
		    }
		}
	}

	class ReglaExprOrLogicoContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function OR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::OR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprOrLogico($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprOrLogico($this);
		    }
		}
	}

	class ReglaExprRestaContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function RESTA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RESTA, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprResta($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprResta($this);
		    }
		}
	}

	class ReglaExprPrimarioContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function primario(): ?PrimarioContext
	    {
	    	return $this->getTypedRuleContext(PrimarioContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprPrimario($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprPrimario($this);
		    }
		}
	}

	class ReglaExprMayorContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<ExpresionContext>|ExpresionContext|null
	     */
	    public function expresion(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpresionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpresionContext::class, $index);
	    }

	    public function GT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::GT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprMayor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprMayor($this);
		    }
		}
	}

	class ReglaExprDireccionContext extends ExpresionContext
	{
		public function __construct(ExpresionContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ADDR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ADDR, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaExprDireccion($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaExprDireccion($this);
		    }
		}
	} 

	class PrimarioContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_primario;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaPrimarioMiembroContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function primario(): ?PrimarioContext
	    {
	    	return $this->getTypedRuleContext(PrimarioContext::class, 0);
	    }

	    public function PUNTO(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTO, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrimarioMiembro($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioMiembro($this);
		    }
		}
	}

	class ReglaPrimarioNilContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NIL(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::NIL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrimarioNil($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioNil($this);
		    }
		}
	}

	class ReglaPrimarioIndiceContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function primario(): ?PrimarioContext
	    {
	    	return $this->getTypedRuleContext(PrimarioContext::class, 0);
	    }

	    public function CORCHIZQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CORCHIZQ, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function CORCHDER(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CORCHDER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrimarioIndice($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioIndice($this);
		    }
		}
	}

	class ReglaPrimarioIdContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrimarioId($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioId($this);
		    }
		}
	}

	class ReglaPrimarioParentesisContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PARENIZQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENIZQ, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

	    public function PARENDER(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENDER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrimarioParentesis($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioParentesis($this);
		    }
		}
	}

	class ReglaPrimarioLiteralContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrimarioLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioLiteral($this);
		    }
		}
	}

	class ReglaPrimarioLlamadaContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function primario(): ?PrimarioContext
	    {
	    	return $this->getTypedRuleContext(PrimarioContext::class, 0);
	    }

	    public function argumentos(): ?ArgumentosContext
	    {
	    	return $this->getTypedRuleContext(ArgumentosContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrimarioLlamada($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioLlamada($this);
		    }
		}
	}

	class ReglaPrimarioLlamadaBuiltInContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function llamadaBuiltIn(): ?LlamadaBuiltInContext
	    {
	    	return $this->getTypedRuleContext(LlamadaBuiltInContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrimarioLlamadaBuiltIn($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioLlamadaBuiltIn($this);
		    }
		}
	} 

	class LlamadaBuiltInContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_llamadaBuiltIn;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaLlamadaSubstrContext extends LlamadaBuiltInContext
	{
		public function __construct(LlamadaBuiltInContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function argumentos(): ?ArgumentosContext
	    {
	    	return $this->getTypedRuleContext(ArgumentosContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaLlamadaSubstr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaLlamadaSubstr($this);
		    }
		}
	}

	class ReglaLlamadaTypeOfContext extends LlamadaBuiltInContext
	{
		public function __construct(LlamadaBuiltInContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function argumentos(): ?ArgumentosContext
	    {
	    	return $this->getTypedRuleContext(ArgumentosContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaLlamadaTypeOf($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaLlamadaTypeOf($this);
		    }
		}
	}

	class ReglaLlamadaPrintlnContext extends LlamadaBuiltInContext
	{
		public function __construct(LlamadaBuiltInContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function PUNTO(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTO, 0);
	    }

	    public function argumentos(): ?ArgumentosContext
	    {
	    	return $this->getTypedRuleContext(ArgumentosContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaLlamadaPrintln($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaLlamadaPrintln($this);
		    }
		}
	}

	class ReglaLlamadaNowContext extends LlamadaBuiltInContext
	{
		public function __construct(LlamadaBuiltInContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function argumentos(): ?ArgumentosContext
	    {
	    	return $this->getTypedRuleContext(ArgumentosContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaLlamadaNow($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaLlamadaNow($this);
		    }
		}
	}

	class ReglaLlamadaLenContext extends LlamadaBuiltInContext
	{
		public function __construct(LlamadaBuiltInContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function argumentos(): ?ArgumentosContext
	    {
	    	return $this->getTypedRuleContext(ArgumentosContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaLlamadaLen($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaLlamadaLen($this);
		    }
		}
	} 

	class ArgumentosContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_argumentos;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaArgumentosContext extends ArgumentosContext
	{
		public function __construct(ArgumentosContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function PARENIZQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENIZQ, 0);
	    }

	    public function PARENDER(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENDER, 0);
	    }

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaArgumentos($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaArgumentos($this);
		    }
		}
	} 

	class LiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_literal;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaLiteralRunaContext extends LiteralContext
	{
		public function __construct(LiteralContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RUNA_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RUNA_LITERAL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaLiteralRuna($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaLiteralRuna($this);
		    }
		}
	}

	class ReglaLiteralCadenaContext extends LiteralContext
	{
		public function __construct(LiteralContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function CADENA_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CADENA_LITERAL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaLiteralCadena($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaLiteralCadena($this);
		    }
		}
	}

	class ReglaLiteralFlotanteContext extends LiteralContext
	{
		public function __construct(LiteralContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FLOTANTE_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FLOTANTE_LITERAL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaLiteralFlotante($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaLiteralFlotante($this);
		    }
		}
	}

	class ReglaLiteralVerdaderoContext extends LiteralContext
	{
		public function __construct(LiteralContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function TRUE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::TRUE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaLiteralVerdadero($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaLiteralVerdadero($this);
		    }
		}
	}

	class ReglaLiteralEnteroContext extends LiteralContext
	{
		public function __construct(LiteralContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function ENTERO_LITERAL(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ENTERO_LITERAL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaLiteralEntero($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaLiteralEntero($this);
		    }
		}
	}

	class ReglaLiteralFalsoContext extends LiteralContext
	{
		public function __construct(LiteralContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FALSE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FALSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaLiteralFalso($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaLiteralFalso($this);
		    }
		}
	} 

	class ListaIdContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_listaId;
	    }
	 
		public function copyFrom(ParserRuleContext $context): void
		{
			parent::copyFrom($context);

		}
	}

	class ReglaListaIdContext extends ListaIdContext
	{
		public function __construct(ListaIdContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::ID);
	    	}

	        return $this->getToken(GolampiParser::ID, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::COMA);
	    	}

	        return $this->getToken(GolampiParser::COMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaListaId($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaListaId($this);
		    }
		}
	} 
}