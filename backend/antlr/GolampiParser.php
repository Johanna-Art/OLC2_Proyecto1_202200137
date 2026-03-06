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
		public const VAR = 1, CONST = 2, FUNC = 3, IF = 4, ELSE = 5, SWITCH = 6, 
               CASE = 7, DEFAULT = 8, FOR = 9, BREAK = 10, CONTINUE = 11, 
               RETURN = 12, NIL = 13, INT32 = 14, FLOAT32 = 15, BOOL = 16, 
               RUNE = 17, STRING_TYPE = 18, TRUE = 19, FALSE = 20, FMT = 21, 
               PRINTLN = 22, LEN = 23, NOW = 24, SUBSTR = 25, TYPEOF = 26, 
               ID = 27, ENTERO_LITERAL = 28, FLOTANTE_LITERAL = 29, CADENA_LITERAL = 30, 
               RUNA_LITERAL = 31, ASIGN = 32, ASIGN_SUMA = 33, ASIGN_RESTA = 34, 
               ASIGN_MULT = 35, ASIGN_DIV = 36, SUMA = 37, RESTA = 38, MULT = 39, 
               DIV = 40, MOD = 41, EQ = 42, NEQ = 43, LT = 44, LTE = 45, 
               GT = 46, GTE = 47, AND = 48, OR = 49, NOT = 50, ADDR = 51, 
               INC = 52, DEC = 53, PARENIZQ = 54, PARENDER = 55, CORCHIZQ = 56, 
               CORCHDER = 57, LLAVEIZQ = 58, LLAVEDER = 59, COMA = 60, DOSPUNTOS = 61, 
               PUNTOYCOMA = 62, PUNTO = 63, COMENTARIO_LINEA = 64, COMENTARIO_BLOQUE = 65, 
               ESPACIO = 66;

		public const RULE_programa = 0, RULE_declaracion = 1, RULE_listaParam = 2, 
               RULE_param = 3, RULE_tipoRetorno = 4, RULE_listaTipos = 5, 
               RULE_tipo = 6, RULE_tipoArray = 7, RULE_bloque = 8, RULE_sentencia = 9, 
               RULE_sentSimple = 10, RULE_opAsign = 11, RULE_clausulaFor = 12, 
               RULE_clausulaCaso = 13, RULE_listaExpr = 14, RULE_expresion = 15, 
               RULE_primario = 16, RULE_argumentos = 17, RULE_literal = 18, 
               RULE_listaId = 19;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'programa', 'declaracion', 'listaParam', 'param', 'tipoRetorno', 'listaTipos', 
			'tipo', 'tipoArray', 'bloque', 'sentencia', 'sentSimple', 'opAsign', 
			'clausulaFor', 'clausulaCaso', 'listaExpr', 'expresion', 'primario', 
			'argumentos', 'literal', 'listaId'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'var'", "'const'", "'func'", "'if'", "'else'", "'switch'", 
		    "'case'", "'default'", "'for'", "'break'", "'continue'", "'return'", 
		    "'nil'", "'int32'", "'float32'", "'bool'", "'rune'", "'string'", "'true'", 
		    "'false'", "'fmt'", "'Println'", "'len'", "'now'", "'substr'", "'typeOf'", 
		    null, null, null, null, null, "'='", "'+='", "'-='", "'*='", "'/='", 
		    "'+'", "'-'", "'*'", "'/'", "'%'", "'=='", "'!='", "'<'", "'<='", 
		    "'>'", "'>='", "'&&'", "'||'", "'!'", "'&'", "'++'", "'--'", "'('", 
		    "')'", "'['", "']'", "'{'", "'}'", "','", "':'", "';'", "'.'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "VAR", "CONST", "FUNC", "IF", "ELSE", "SWITCH", "CASE", "DEFAULT", 
		    "FOR", "BREAK", "CONTINUE", "RETURN", "NIL", "INT32", "FLOAT32", "BOOL", 
		    "RUNE", "STRING_TYPE", "TRUE", "FALSE", "FMT", "PRINTLN", "LEN", "NOW", 
		    "SUBSTR", "TYPEOF", "ID", "ENTERO_LITERAL", "FLOTANTE_LITERAL", "CADENA_LITERAL", 
		    "RUNA_LITERAL", "ASIGN", "ASIGN_SUMA", "ASIGN_RESTA", "ASIGN_MULT", 
		    "ASIGN_DIV", "SUMA", "RESTA", "MULT", "DIV", "MOD", "EQ", "NEQ", "LT", 
		    "LTE", "GT", "GTE", "AND", "OR", "NOT", "ADDR", "INC", "DEC", "PARENIZQ", 
		    "PARENDER", "CORCHIZQ", "CORCHDER", "LLAVEIZQ", "LLAVEDER", "COMA", 
		    "DOSPUNTOS", "PUNTOYCOMA", "PUNTO", "COMENTARIO_LINEA", "COMENTARIO_BLOQUE", 
		    "ESPACIO"
		];

		private const SERIALIZED_ATN =
			[4, 1, 66, 433, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 1, 0, 5, 0, 42, 8, 0, 10, 0, 12, 0, 45, 9, 0, 1, 0, 1, 0, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 54, 8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 
		    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 69, 8, 
		    1, 1, 1, 1, 1, 3, 1, 73, 8, 1, 1, 1, 3, 1, 76, 8, 1, 1, 2, 1, 2, 1, 
		    2, 5, 2, 81, 8, 2, 10, 2, 12, 2, 84, 9, 2, 1, 3, 1, 3, 1, 3, 1, 3, 
		    1, 3, 3, 3, 91, 8, 3, 1, 4, 1, 4, 1, 4, 1, 4, 1, 4, 3, 4, 98, 8, 4, 
		    1, 5, 1, 5, 1, 5, 5, 5, 103, 8, 5, 10, 5, 12, 5, 106, 9, 5, 1, 6, 
		    1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 1, 6, 3, 6, 116, 8, 6, 1, 7, 1, 
		    7, 1, 7, 1, 7, 1, 7, 1, 8, 1, 8, 5, 8, 125, 8, 8, 10, 8, 12, 8, 128, 
		    9, 8, 1, 8, 1, 8, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 3, 9, 137, 8, 9, 1, 
		    9, 3, 9, 140, 8, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 3, 9, 147, 8, 9, 
		    1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 3, 9, 155, 8, 9, 1, 9, 1, 9, 1, 
		    9, 1, 9, 3, 9, 161, 8, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 
		    3, 9, 170, 8, 9, 1, 9, 1, 9, 1, 9, 3, 9, 175, 8, 9, 1, 9, 1, 9, 1, 
		    9, 3, 9, 180, 8, 9, 1, 9, 1, 9, 1, 9, 3, 9, 185, 8, 9, 3, 9, 187, 
		    8, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 3, 9, 194, 8, 9, 3, 9, 196, 8, 
		    9, 1, 9, 1, 9, 1, 9, 3, 9, 201, 8, 9, 3, 9, 203, 8, 9, 1, 9, 3, 9, 
		    206, 8, 9, 1, 9, 1, 9, 5, 9, 210, 8, 9, 10, 9, 12, 9, 213, 9, 9, 1, 
		    9, 1, 9, 1, 9, 1, 9, 3, 9, 219, 8, 9, 1, 9, 1, 9, 1, 9, 3, 9, 224, 
		    8, 9, 1, 9, 1, 9, 3, 9, 228, 8, 9, 1, 9, 1, 9, 3, 9, 232, 8, 9, 1, 
		    9, 3, 9, 235, 8, 9, 1, 9, 1, 9, 3, 9, 239, 8, 9, 1, 9, 3, 9, 242, 
		    8, 9, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 
		    1, 10, 3, 10, 254, 8, 10, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 3, 11, 
		    261, 8, 11, 1, 12, 3, 12, 264, 8, 12, 1, 12, 1, 12, 3, 12, 268, 8, 
		    12, 1, 12, 1, 12, 3, 12, 272, 8, 12, 1, 13, 1, 13, 1, 13, 1, 13, 5, 
		    13, 278, 8, 13, 10, 13, 12, 13, 281, 9, 13, 1, 13, 1, 13, 1, 13, 5, 
		    13, 286, 8, 13, 10, 13, 12, 13, 289, 9, 13, 3, 13, 291, 8, 13, 1, 
		    14, 1, 14, 1, 14, 5, 14, 296, 8, 14, 10, 14, 12, 14, 299, 9, 14, 1, 
		    15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 
		    1, 15, 1, 15, 3, 15, 313, 8, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 
		    1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 
		    15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 
		    1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 
		    15, 1, 15, 1, 15, 1, 15, 1, 15, 1, 15, 5, 15, 354, 8, 15, 10, 15, 
		    12, 15, 357, 9, 15, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 
		    1, 16, 3, 16, 367, 8, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 
		    1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 
		    16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 
		    3, 16, 394, 8, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 1, 16, 
		    1, 16, 1, 16, 1, 16, 5, 16, 406, 8, 16, 10, 16, 12, 16, 409, 9, 16, 
		    1, 17, 1, 17, 3, 17, 413, 8, 17, 1, 17, 1, 17, 1, 18, 1, 18, 1, 18, 
		    1, 18, 1, 18, 1, 18, 3, 18, 423, 8, 18, 1, 19, 1, 19, 1, 19, 5, 19, 
		    428, 8, 19, 10, 19, 12, 19, 431, 9, 19, 1, 19, 0, 2, 30, 32, 20, 0, 
		    2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 
		    38, 0, 0, 516, 0, 43, 1, 0, 0, 0, 2, 75, 1, 0, 0, 0, 4, 77, 1, 0, 
		    0, 0, 6, 90, 1, 0, 0, 0, 8, 97, 1, 0, 0, 0, 10, 99, 1, 0, 0, 0, 12, 
		    115, 1, 0, 0, 0, 14, 117, 1, 0, 0, 0, 16, 122, 1, 0, 0, 0, 18, 241, 
		    1, 0, 0, 0, 20, 253, 1, 0, 0, 0, 22, 260, 1, 0, 0, 0, 24, 263, 1, 
		    0, 0, 0, 26, 290, 1, 0, 0, 0, 28, 292, 1, 0, 0, 0, 30, 312, 1, 0, 
		    0, 0, 32, 393, 1, 0, 0, 0, 34, 410, 1, 0, 0, 0, 36, 422, 1, 0, 0, 
		    0, 38, 424, 1, 0, 0, 0, 40, 42, 3, 2, 1, 0, 41, 40, 1, 0, 0, 0, 42, 
		    45, 1, 0, 0, 0, 43, 41, 1, 0, 0, 0, 43, 44, 1, 0, 0, 0, 44, 46, 1, 
		    0, 0, 0, 45, 43, 1, 0, 0, 0, 46, 47, 5, 0, 0, 1, 47, 1, 1, 0, 0, 0, 
		    48, 49, 5, 1, 0, 0, 49, 50, 3, 38, 19, 0, 50, 53, 3, 12, 6, 0, 51, 
		    52, 5, 32, 0, 0, 52, 54, 3, 28, 14, 0, 53, 51, 1, 0, 0, 0, 53, 54, 
		    1, 0, 0, 0, 54, 55, 1, 0, 0, 0, 55, 56, 5, 62, 0, 0, 56, 76, 1, 0, 
		    0, 0, 57, 58, 5, 2, 0, 0, 58, 59, 5, 27, 0, 0, 59, 60, 3, 12, 6, 0, 
		    60, 61, 5, 32, 0, 0, 61, 62, 3, 30, 15, 0, 62, 63, 5, 62, 0, 0, 63, 
		    76, 1, 0, 0, 0, 64, 65, 5, 3, 0, 0, 65, 66, 5, 27, 0, 0, 66, 68, 5, 
		    54, 0, 0, 67, 69, 3, 4, 2, 0, 68, 67, 1, 0, 0, 0, 68, 69, 1, 0, 0, 
		    0, 69, 70, 1, 0, 0, 0, 70, 72, 5, 55, 0, 0, 71, 73, 3, 8, 4, 0, 72, 
		    71, 1, 0, 0, 0, 72, 73, 1, 0, 0, 0, 73, 74, 1, 0, 0, 0, 74, 76, 3, 
		    16, 8, 0, 75, 48, 1, 0, 0, 0, 75, 57, 1, 0, 0, 0, 75, 64, 1, 0, 0, 
		    0, 76, 3, 1, 0, 0, 0, 77, 82, 3, 6, 3, 0, 78, 79, 5, 60, 0, 0, 79, 
		    81, 3, 6, 3, 0, 80, 78, 1, 0, 0, 0, 81, 84, 1, 0, 0, 0, 82, 80, 1, 
		    0, 0, 0, 82, 83, 1, 0, 0, 0, 83, 5, 1, 0, 0, 0, 84, 82, 1, 0, 0, 0, 
		    85, 86, 5, 27, 0, 0, 86, 91, 3, 12, 6, 0, 87, 88, 5, 27, 0, 0, 88, 
		    89, 5, 39, 0, 0, 89, 91, 3, 12, 6, 0, 90, 85, 1, 0, 0, 0, 90, 87, 
		    1, 0, 0, 0, 91, 7, 1, 0, 0, 0, 92, 98, 3, 12, 6, 0, 93, 94, 5, 54, 
		    0, 0, 94, 95, 3, 10, 5, 0, 95, 96, 5, 55, 0, 0, 96, 98, 1, 0, 0, 0, 
		    97, 92, 1, 0, 0, 0, 97, 93, 1, 0, 0, 0, 98, 9, 1, 0, 0, 0, 99, 104, 
		    3, 12, 6, 0, 100, 101, 5, 60, 0, 0, 101, 103, 3, 12, 6, 0, 102, 100, 
		    1, 0, 0, 0, 103, 106, 1, 0, 0, 0, 104, 102, 1, 0, 0, 0, 104, 105, 
		    1, 0, 0, 0, 105, 11, 1, 0, 0, 0, 106, 104, 1, 0, 0, 0, 107, 116, 5, 
		    14, 0, 0, 108, 116, 5, 15, 0, 0, 109, 116, 5, 16, 0, 0, 110, 116, 
		    5, 17, 0, 0, 111, 116, 5, 18, 0, 0, 112, 116, 3, 14, 7, 0, 113, 114, 
		    5, 39, 0, 0, 114, 116, 3, 12, 6, 0, 115, 107, 1, 0, 0, 0, 115, 108, 
		    1, 0, 0, 0, 115, 109, 1, 0, 0, 0, 115, 110, 1, 0, 0, 0, 115, 111, 
		    1, 0, 0, 0, 115, 112, 1, 0, 0, 0, 115, 113, 1, 0, 0, 0, 116, 13, 1, 
		    0, 0, 0, 117, 118, 5, 56, 0, 0, 118, 119, 3, 30, 15, 0, 119, 120, 
		    5, 57, 0, 0, 120, 121, 3, 12, 6, 0, 121, 15, 1, 0, 0, 0, 122, 126, 
		    5, 58, 0, 0, 123, 125, 3, 18, 9, 0, 124, 123, 1, 0, 0, 0, 125, 128, 
		    1, 0, 0, 0, 126, 124, 1, 0, 0, 0, 126, 127, 1, 0, 0, 0, 127, 129, 
		    1, 0, 0, 0, 128, 126, 1, 0, 0, 0, 129, 130, 5, 59, 0, 0, 130, 17, 
		    1, 0, 0, 0, 131, 132, 5, 1, 0, 0, 132, 133, 3, 38, 19, 0, 133, 136, 
		    3, 12, 6, 0, 134, 135, 5, 32, 0, 0, 135, 137, 3, 28, 14, 0, 136, 134, 
		    1, 0, 0, 0, 136, 137, 1, 0, 0, 0, 137, 139, 1, 0, 0, 0, 138, 140, 
		    5, 62, 0, 0, 139, 138, 1, 0, 0, 0, 139, 140, 1, 0, 0, 0, 140, 242, 
		    1, 0, 0, 0, 141, 142, 3, 38, 19, 0, 142, 143, 5, 61, 0, 0, 143, 144, 
		    5, 32, 0, 0, 144, 146, 3, 28, 14, 0, 145, 147, 5, 62, 0, 0, 146, 145, 
		    1, 0, 0, 0, 146, 147, 1, 0, 0, 0, 147, 242, 1, 0, 0, 0, 148, 149, 
		    5, 2, 0, 0, 149, 150, 5, 27, 0, 0, 150, 151, 3, 12, 6, 0, 151, 152, 
		    5, 32, 0, 0, 152, 154, 3, 30, 15, 0, 153, 155, 5, 62, 0, 0, 154, 153, 
		    1, 0, 0, 0, 154, 155, 1, 0, 0, 0, 155, 242, 1, 0, 0, 0, 156, 157, 
		    3, 28, 14, 0, 157, 158, 3, 22, 11, 0, 158, 160, 3, 28, 14, 0, 159, 
		    161, 5, 62, 0, 0, 160, 159, 1, 0, 0, 0, 160, 161, 1, 0, 0, 0, 161, 
		    242, 1, 0, 0, 0, 162, 163, 3, 32, 16, 0, 163, 164, 5, 56, 0, 0, 164, 
		    165, 3, 30, 15, 0, 165, 166, 5, 57, 0, 0, 166, 167, 3, 22, 11, 0, 
		    167, 169, 3, 30, 15, 0, 168, 170, 5, 62, 0, 0, 169, 168, 1, 0, 0, 
		    0, 169, 170, 1, 0, 0, 0, 170, 242, 1, 0, 0, 0, 171, 172, 3, 30, 15, 
		    0, 172, 174, 5, 52, 0, 0, 173, 175, 5, 62, 0, 0, 174, 173, 1, 0, 0, 
		    0, 174, 175, 1, 0, 0, 0, 175, 242, 1, 0, 0, 0, 176, 177, 3, 30, 15, 
		    0, 177, 179, 5, 53, 0, 0, 178, 180, 5, 62, 0, 0, 179, 178, 1, 0, 0, 
		    0, 179, 180, 1, 0, 0, 0, 180, 242, 1, 0, 0, 0, 181, 186, 5, 4, 0, 
		    0, 182, 184, 3, 20, 10, 0, 183, 185, 5, 62, 0, 0, 184, 183, 1, 0, 
		    0, 0, 184, 185, 1, 0, 0, 0, 185, 187, 1, 0, 0, 0, 186, 182, 1, 0, 
		    0, 0, 186, 187, 1, 0, 0, 0, 187, 188, 1, 0, 0, 0, 188, 189, 3, 30, 
		    15, 0, 189, 195, 3, 16, 8, 0, 190, 193, 5, 5, 0, 0, 191, 194, 3, 18, 
		    9, 0, 192, 194, 3, 16, 8, 0, 193, 191, 1, 0, 0, 0, 193, 192, 1, 0, 
		    0, 0, 194, 196, 1, 0, 0, 0, 195, 190, 1, 0, 0, 0, 195, 196, 1, 0, 
		    0, 0, 196, 242, 1, 0, 0, 0, 197, 202, 5, 6, 0, 0, 198, 200, 3, 20, 
		    10, 0, 199, 201, 5, 62, 0, 0, 200, 199, 1, 0, 0, 0, 200, 201, 1, 0, 
		    0, 0, 201, 203, 1, 0, 0, 0, 202, 198, 1, 0, 0, 0, 202, 203, 1, 0, 
		    0, 0, 203, 205, 1, 0, 0, 0, 204, 206, 3, 30, 15, 0, 205, 204, 1, 0, 
		    0, 0, 205, 206, 1, 0, 0, 0, 206, 207, 1, 0, 0, 0, 207, 211, 5, 58, 
		    0, 0, 208, 210, 3, 26, 13, 0, 209, 208, 1, 0, 0, 0, 210, 213, 1, 0, 
		    0, 0, 211, 209, 1, 0, 0, 0, 211, 212, 1, 0, 0, 0, 212, 214, 1, 0, 
		    0, 0, 213, 211, 1, 0, 0, 0, 214, 242, 5, 59, 0, 0, 215, 218, 5, 9, 
		    0, 0, 216, 219, 3, 24, 12, 0, 217, 219, 3, 30, 15, 0, 218, 216, 1, 
		    0, 0, 0, 218, 217, 1, 0, 0, 0, 218, 219, 1, 0, 0, 0, 219, 220, 1, 
		    0, 0, 0, 220, 242, 3, 16, 8, 0, 221, 223, 5, 10, 0, 0, 222, 224, 5, 
		    62, 0, 0, 223, 222, 1, 0, 0, 0, 223, 224, 1, 0, 0, 0, 224, 242, 1, 
		    0, 0, 0, 225, 227, 5, 11, 0, 0, 226, 228, 5, 62, 0, 0, 227, 226, 1, 
		    0, 0, 0, 227, 228, 1, 0, 0, 0, 228, 242, 1, 0, 0, 0, 229, 231, 5, 
		    12, 0, 0, 230, 232, 3, 28, 14, 0, 231, 230, 1, 0, 0, 0, 231, 232, 
		    1, 0, 0, 0, 232, 234, 1, 0, 0, 0, 233, 235, 5, 62, 0, 0, 234, 233, 
		    1, 0, 0, 0, 234, 235, 1, 0, 0, 0, 235, 242, 1, 0, 0, 0, 236, 238, 
		    3, 28, 14, 0, 237, 239, 5, 62, 0, 0, 238, 237, 1, 0, 0, 0, 238, 239, 
		    1, 0, 0, 0, 239, 242, 1, 0, 0, 0, 240, 242, 3, 16, 8, 0, 241, 131, 
		    1, 0, 0, 0, 241, 141, 1, 0, 0, 0, 241, 148, 1, 0, 0, 0, 241, 156, 
		    1, 0, 0, 0, 241, 162, 1, 0, 0, 0, 241, 171, 1, 0, 0, 0, 241, 176, 
		    1, 0, 0, 0, 241, 181, 1, 0, 0, 0, 241, 197, 1, 0, 0, 0, 241, 215, 
		    1, 0, 0, 0, 241, 221, 1, 0, 0, 0, 241, 225, 1, 0, 0, 0, 241, 229, 
		    1, 0, 0, 0, 241, 236, 1, 0, 0, 0, 241, 240, 1, 0, 0, 0, 242, 19, 1, 
		    0, 0, 0, 243, 244, 3, 38, 19, 0, 244, 245, 5, 61, 0, 0, 245, 246, 
		    5, 32, 0, 0, 246, 247, 3, 28, 14, 0, 247, 254, 1, 0, 0, 0, 248, 249, 
		    3, 28, 14, 0, 249, 250, 3, 22, 11, 0, 250, 251, 3, 28, 14, 0, 251, 
		    254, 1, 0, 0, 0, 252, 254, 3, 28, 14, 0, 253, 243, 1, 0, 0, 0, 253, 
		    248, 1, 0, 0, 0, 253, 252, 1, 0, 0, 0, 254, 21, 1, 0, 0, 0, 255, 261, 
		    5, 32, 0, 0, 256, 261, 5, 33, 0, 0, 257, 261, 5, 34, 0, 0, 258, 261, 
		    5, 35, 0, 0, 259, 261, 5, 36, 0, 0, 260, 255, 1, 0, 0, 0, 260, 256, 
		    1, 0, 0, 0, 260, 257, 1, 0, 0, 0, 260, 258, 1, 0, 0, 0, 260, 259, 
		    1, 0, 0, 0, 261, 23, 1, 0, 0, 0, 262, 264, 3, 20, 10, 0, 263, 262, 
		    1, 0, 0, 0, 263, 264, 1, 0, 0, 0, 264, 265, 1, 0, 0, 0, 265, 267, 
		    5, 62, 0, 0, 266, 268, 3, 30, 15, 0, 267, 266, 1, 0, 0, 0, 267, 268, 
		    1, 0, 0, 0, 268, 269, 1, 0, 0, 0, 269, 271, 5, 62, 0, 0, 270, 272, 
		    3, 30, 15, 0, 271, 270, 1, 0, 0, 0, 271, 272, 1, 0, 0, 0, 272, 25, 
		    1, 0, 0, 0, 273, 274, 5, 7, 0, 0, 274, 275, 3, 28, 14, 0, 275, 279, 
		    5, 61, 0, 0, 276, 278, 3, 18, 9, 0, 277, 276, 1, 0, 0, 0, 278, 281, 
		    1, 0, 0, 0, 279, 277, 1, 0, 0, 0, 279, 280, 1, 0, 0, 0, 280, 291, 
		    1, 0, 0, 0, 281, 279, 1, 0, 0, 0, 282, 283, 5, 8, 0, 0, 283, 287, 
		    5, 61, 0, 0, 284, 286, 3, 18, 9, 0, 285, 284, 1, 0, 0, 0, 286, 289, 
		    1, 0, 0, 0, 287, 285, 1, 0, 0, 0, 287, 288, 1, 0, 0, 0, 288, 291, 
		    1, 0, 0, 0, 289, 287, 1, 0, 0, 0, 290, 273, 1, 0, 0, 0, 290, 282, 
		    1, 0, 0, 0, 291, 27, 1, 0, 0, 0, 292, 297, 3, 30, 15, 0, 293, 294, 
		    5, 60, 0, 0, 294, 296, 3, 30, 15, 0, 295, 293, 1, 0, 0, 0, 296, 299, 
		    1, 0, 0, 0, 297, 295, 1, 0, 0, 0, 297, 298, 1, 0, 0, 0, 298, 29, 1, 
		    0, 0, 0, 299, 297, 1, 0, 0, 0, 300, 301, 6, 15, -1, 0, 301, 302, 5, 
		    50, 0, 0, 302, 313, 3, 30, 15, 6, 303, 304, 5, 38, 0, 0, 304, 313, 
		    3, 30, 15, 5, 305, 306, 5, 37, 0, 0, 306, 313, 3, 30, 15, 4, 307, 
		    308, 5, 51, 0, 0, 308, 313, 3, 30, 15, 3, 309, 310, 5, 39, 0, 0, 310, 
		    313, 3, 30, 15, 2, 311, 313, 3, 32, 16, 0, 312, 300, 1, 0, 0, 0, 312, 
		    303, 1, 0, 0, 0, 312, 305, 1, 0, 0, 0, 312, 307, 1, 0, 0, 0, 312, 
		    309, 1, 0, 0, 0, 312, 311, 1, 0, 0, 0, 313, 355, 1, 0, 0, 0, 314, 
		    315, 10, 19, 0, 0, 315, 316, 5, 49, 0, 0, 316, 354, 3, 30, 15, 20, 
		    317, 318, 10, 18, 0, 0, 318, 319, 5, 48, 0, 0, 319, 354, 3, 30, 15, 
		    19, 320, 321, 10, 17, 0, 0, 321, 322, 5, 42, 0, 0, 322, 354, 3, 30, 
		    15, 18, 323, 324, 10, 16, 0, 0, 324, 325, 5, 43, 0, 0, 325, 354, 3, 
		    30, 15, 17, 326, 327, 10, 15, 0, 0, 327, 328, 5, 46, 0, 0, 328, 354, 
		    3, 30, 15, 16, 329, 330, 10, 14, 0, 0, 330, 331, 5, 47, 0, 0, 331, 
		    354, 3, 30, 15, 15, 332, 333, 10, 13, 0, 0, 333, 334, 5, 44, 0, 0, 
		    334, 354, 3, 30, 15, 14, 335, 336, 10, 12, 0, 0, 336, 337, 5, 45, 
		    0, 0, 337, 354, 3, 30, 15, 13, 338, 339, 10, 11, 0, 0, 339, 340, 5, 
		    37, 0, 0, 340, 354, 3, 30, 15, 12, 341, 342, 10, 10, 0, 0, 342, 343, 
		    5, 38, 0, 0, 343, 354, 3, 30, 15, 11, 344, 345, 10, 9, 0, 0, 345, 
		    346, 5, 39, 0, 0, 346, 354, 3, 30, 15, 10, 347, 348, 10, 8, 0, 0, 
		    348, 349, 5, 40, 0, 0, 349, 354, 3, 30, 15, 9, 350, 351, 10, 7, 0, 
		    0, 351, 352, 5, 41, 0, 0, 352, 354, 3, 30, 15, 8, 353, 314, 1, 0, 
		    0, 0, 353, 317, 1, 0, 0, 0, 353, 320, 1, 0, 0, 0, 353, 323, 1, 0, 
		    0, 0, 353, 326, 1, 0, 0, 0, 353, 329, 1, 0, 0, 0, 353, 332, 1, 0, 
		    0, 0, 353, 335, 1, 0, 0, 0, 353, 338, 1, 0, 0, 0, 353, 341, 1, 0, 
		    0, 0, 353, 344, 1, 0, 0, 0, 353, 347, 1, 0, 0, 0, 353, 350, 1, 0, 
		    0, 0, 354, 357, 1, 0, 0, 0, 355, 353, 1, 0, 0, 0, 355, 356, 1, 0, 
		    0, 0, 356, 31, 1, 0, 0, 0, 357, 355, 1, 0, 0, 0, 358, 359, 6, 16, 
		    -1, 0, 359, 360, 5, 21, 0, 0, 360, 361, 5, 63, 0, 0, 361, 362, 5, 
		    22, 0, 0, 362, 394, 3, 34, 17, 0, 363, 364, 5, 23, 0, 0, 364, 366, 
		    5, 54, 0, 0, 365, 367, 3, 30, 15, 0, 366, 365, 1, 0, 0, 0, 366, 367, 
		    1, 0, 0, 0, 367, 368, 1, 0, 0, 0, 368, 394, 5, 55, 0, 0, 369, 370, 
		    5, 24, 0, 0, 370, 371, 5, 54, 0, 0, 371, 394, 5, 55, 0, 0, 372, 373, 
		    5, 25, 0, 0, 373, 374, 5, 54, 0, 0, 374, 375, 3, 30, 15, 0, 375, 376, 
		    5, 60, 0, 0, 376, 377, 3, 30, 15, 0, 377, 378, 5, 60, 0, 0, 378, 379, 
		    3, 30, 15, 0, 379, 380, 5, 55, 0, 0, 380, 394, 1, 0, 0, 0, 381, 382, 
		    5, 26, 0, 0, 382, 383, 5, 54, 0, 0, 383, 384, 3, 30, 15, 0, 384, 385, 
		    5, 55, 0, 0, 385, 394, 1, 0, 0, 0, 386, 394, 3, 36, 18, 0, 387, 394, 
		    5, 27, 0, 0, 388, 394, 5, 13, 0, 0, 389, 390, 5, 54, 0, 0, 390, 391, 
		    3, 30, 15, 0, 391, 392, 5, 55, 0, 0, 392, 394, 1, 0, 0, 0, 393, 358, 
		    1, 0, 0, 0, 393, 363, 1, 0, 0, 0, 393, 369, 1, 0, 0, 0, 393, 372, 
		    1, 0, 0, 0, 393, 381, 1, 0, 0, 0, 393, 386, 1, 0, 0, 0, 393, 387, 
		    1, 0, 0, 0, 393, 388, 1, 0, 0, 0, 393, 389, 1, 0, 0, 0, 394, 407, 
		    1, 0, 0, 0, 395, 396, 10, 3, 0, 0, 396, 397, 5, 56, 0, 0, 397, 398, 
		    3, 30, 15, 0, 398, 399, 5, 57, 0, 0, 399, 406, 1, 0, 0, 0, 400, 401, 
		    10, 2, 0, 0, 401, 406, 3, 34, 17, 0, 402, 403, 10, 1, 0, 0, 403, 404, 
		    5, 63, 0, 0, 404, 406, 5, 27, 0, 0, 405, 395, 1, 0, 0, 0, 405, 400, 
		    1, 0, 0, 0, 405, 402, 1, 0, 0, 0, 406, 409, 1, 0, 0, 0, 407, 405, 
		    1, 0, 0, 0, 407, 408, 1, 0, 0, 0, 408, 33, 1, 0, 0, 0, 409, 407, 1, 
		    0, 0, 0, 410, 412, 5, 54, 0, 0, 411, 413, 3, 28, 14, 0, 412, 411, 
		    1, 0, 0, 0, 412, 413, 1, 0, 0, 0, 413, 414, 1, 0, 0, 0, 414, 415, 
		    5, 55, 0, 0, 415, 35, 1, 0, 0, 0, 416, 423, 5, 28, 0, 0, 417, 423, 
		    5, 29, 0, 0, 418, 423, 5, 30, 0, 0, 419, 423, 5, 31, 0, 0, 420, 423, 
		    5, 19, 0, 0, 421, 423, 5, 20, 0, 0, 422, 416, 1, 0, 0, 0, 422, 417, 
		    1, 0, 0, 0, 422, 418, 1, 0, 0, 0, 422, 419, 1, 0, 0, 0, 422, 420, 
		    1, 0, 0, 0, 422, 421, 1, 0, 0, 0, 423, 37, 1, 0, 0, 0, 424, 429, 5, 
		    27, 0, 0, 425, 426, 5, 60, 0, 0, 426, 428, 5, 27, 0, 0, 427, 425, 
		    1, 0, 0, 0, 428, 431, 1, 0, 0, 0, 429, 427, 1, 0, 0, 0, 429, 430, 
		    1, 0, 0, 0, 430, 39, 1, 0, 0, 0, 431, 429, 1, 0, 0, 0, 53, 43, 53, 
		    68, 72, 75, 82, 90, 97, 104, 115, 126, 136, 139, 146, 154, 160, 169, 
		    174, 179, 184, 186, 193, 195, 200, 202, 205, 211, 218, 223, 227, 231, 
		    234, 238, 241, 253, 260, 263, 267, 271, 279, 287, 290, 297, 312, 353, 
		    355, 366, 393, 405, 407, 412, 422, 429];
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
		        $this->setState(43);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 14) !== 0)) {
		        	$this->setState(40);
		        	$this->declaracion();
		        	$this->setState(45);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(46);
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
		        $this->setState(75);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::VAR:
		            	$localContext = new Context\ReglaDeclVarContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(48);
		            	$this->match(self::VAR);
		            	$this->setState(49);
		            	$this->listaId();
		            	$this->setState(50);
		            	$this->tipo();
		            	$this->setState(53);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::ASIGN) {
		            		$this->setState(51);
		            		$this->match(self::ASIGN);
		            		$this->setState(52);
		            		$this->listaExpr();
		            	}
		            	$this->setState(55);
		            	$this->match(self::PUNTOYCOMA);
		            	break;

		            case self::CONST:
		            	$localContext = new Context\ReglaDeclConstContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(57);
		            	$this->match(self::CONST);
		            	$this->setState(58);
		            	$this->match(self::ID);
		            	$this->setState(59);
		            	$this->tipo();
		            	$this->setState(60);
		            	$this->match(self::ASIGN);
		            	$this->setState(61);
		            	$this->recursiveExpresion(0);
		            	$this->setState(62);
		            	$this->match(self::PUNTOYCOMA);
		            	break;

		            case self::FUNC:
		            	$localContext = new Context\ReglaDeclFuncContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(64);
		            	$this->match(self::FUNC);
		            	$this->setState(65);
		            	$this->match(self::ID);
		            	$this->setState(66);
		            	$this->match(self::PARENIZQ);
		            	$this->setState(68);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if ($_la === self::ID) {
		            		$this->setState(67);
		            		$this->listaParam();
		            	}
		            	$this->setState(70);
		            	$this->match(self::PARENDER);
		            	$this->setState(72);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 90072542303731712) !== 0)) {
		            		$this->setState(71);
		            		$this->tipoRetorno();
		            	}
		            	$this->setState(74);
		            	$this->bloque();
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
		public function listaParam(): Context\ListaParamContext
		{
		    $localContext = new Context\ListaParamContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_listaParam);

		    try {
		        $localContext = new Context\ReglaListaParamContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(77);
		        $this->param();
		        $this->setState(82);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMA) {
		        	$this->setState(78);
		        	$this->match(self::COMA);
		        	$this->setState(79);
		        	$this->param();
		        	$this->setState(84);
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

		    $this->enterRule($localContext, 6, self::RULE_param);

		    try {
		        $this->setState(90);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ReglaParamContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(85);
		        	    $this->match(self::ID);
		        	    $this->setState(86);
		        	    $this->tipo();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ReglaParamPunteroContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(87);
		        	    $this->match(self::ID);
		        	    $this->setState(88);
		        	    $this->match(self::MULT);
		        	    $this->setState(89);
		        	    $this->tipo();
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
		public function tipoRetorno(): Context\TipoRetornoContext
		{
		    $localContext = new Context\TipoRetornoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_tipoRetorno);

		    try {
		        $this->setState(97);
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
		            	$this->setState(92);
		            	$this->tipo();
		            	break;

		            case self::PARENIZQ:
		            	$localContext = new Context\TipoRetornoMultipleContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(93);
		            	$this->match(self::PARENIZQ);
		            	$this->setState(94);
		            	$this->listaTipos();
		            	$this->setState(95);
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

		    $this->enterRule($localContext, 10, self::RULE_listaTipos);

		    try {
		        $localContext = new Context\ReglaListaTiposContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(99);
		        $this->tipo();
		        $this->setState(104);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMA) {
		        	$this->setState(100);
		        	$this->match(self::COMA);
		        	$this->setState(101);
		        	$this->tipo();
		        	$this->setState(106);
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

		    $this->enterRule($localContext, 12, self::RULE_tipo);

		    try {
		        $this->setState(115);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::INT32:
		            	$localContext = new Context\ReglaTipoInt32Context($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(107);
		            	$this->match(self::INT32);
		            	break;

		            case self::FLOAT32:
		            	$localContext = new Context\ReglaTipoFloat32Context($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(108);
		            	$this->match(self::FLOAT32);
		            	break;

		            case self::BOOL:
		            	$localContext = new Context\ReglaTipoBoolContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(109);
		            	$this->match(self::BOOL);
		            	break;

		            case self::RUNE:
		            	$localContext = new Context\ReglaTipoRuneContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(110);
		            	$this->match(self::RUNE);
		            	break;

		            case self::STRING_TYPE:
		            	$localContext = new Context\ReglaTipoStringContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(111);
		            	$this->match(self::STRING_TYPE);
		            	break;

		            case self::CORCHIZQ:
		            	$localContext = new Context\ReglaTipoArrayContext($localContext);
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(112);
		            	$this->tipoArray();
		            	break;

		            case self::MULT:
		            	$localContext = new Context\ReglaTipoPunteroContext($localContext);
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(113);
		            	$this->match(self::MULT);
		            	$this->setState(114);
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

		    $this->enterRule($localContext, 14, self::RULE_tipoArray);

		    try {
		        $localContext = new Context\ReglaTipoArrayExprContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(117);
		        $this->match(self::CORCHIZQ);
		        $this->setState(118);
		        $this->recursiveExpresion(0);
		        $this->setState(119);
		        $this->match(self::CORCHDER);
		        $this->setState(120);
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

		    $this->enterRule($localContext, 16, self::RULE_bloque);

		    try {
		        $localContext = new Context\ReglaBloqueStmtContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(122);
		        $this->match(self::LLAVEIZQ);
		        $this->setState(126);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 309623440744660566) !== 0)) {
		        	$this->setState(123);
		        	$this->sentencia();
		        	$this->setState(128);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(129);
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

		    $this->enterRule($localContext, 18, self::RULE_sentencia);

		    try {
		        $this->setState(241);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 33, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ReglaSentVarContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(131);
		        	    $this->match(self::VAR);
		        	    $this->setState(132);
		        	    $this->listaId();
		        	    $this->setState(133);
		        	    $this->tipo();
		        	    $this->setState(136);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::ASIGN) {
		        	    	$this->setState(134);
		        	    	$this->match(self::ASIGN);
		        	    	$this->setState(135);
		        	    	$this->listaExpr();
		        	    }
		        	    $this->setState(139);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::PUNTOYCOMA) {
		        	    	$this->setState(138);
		        	    	$this->match(self::PUNTOYCOMA);
		        	    }
		        	break;

		        	case 2:
		        	    $localContext = new Context\ReglaSentVarCortaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(141);
		        	    $this->listaId();
		        	    $this->setState(142);
		        	    $this->match(self::DOSPUNTOS);
		        	    $this->setState(143);
		        	    $this->match(self::ASIGN);
		        	    $this->setState(144);
		        	    $this->listaExpr();
		        	    $this->setState(146);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::PUNTOYCOMA) {
		        	    	$this->setState(145);
		        	    	$this->match(self::PUNTOYCOMA);
		        	    }
		        	break;

		        	case 3:
		        	    $localContext = new Context\ReglaSentConstContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(148);
		        	    $this->match(self::CONST);
		        	    $this->setState(149);
		        	    $this->match(self::ID);
		        	    $this->setState(150);
		        	    $this->tipo();
		        	    $this->setState(151);
		        	    $this->match(self::ASIGN);
		        	    $this->setState(152);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(154);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::PUNTOYCOMA) {
		        	    	$this->setState(153);
		        	    	$this->match(self::PUNTOYCOMA);
		        	    }
		        	break;

		        	case 4:
		        	    $localContext = new Context\ReglaSentAsignContext($localContext);
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(156);
		        	    $this->listaExpr();
		        	    $this->setState(157);
		        	    $this->opAsign();
		        	    $this->setState(158);
		        	    $this->listaExpr();
		        	    $this->setState(160);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::PUNTOYCOMA) {
		        	    	$this->setState(159);
		        	    	$this->match(self::PUNTOYCOMA);
		        	    }
		        	break;

		        	case 5:
		        	    $localContext = new Context\ReglaSentAsignIndiceContext($localContext);
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(162);
		        	    $this->recursivePrimario(0);
		        	    $this->setState(163);
		        	    $this->match(self::CORCHIZQ);
		        	    $this->setState(164);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(165);
		        	    $this->match(self::CORCHDER);
		        	    $this->setState(166);
		        	    $this->opAsign();
		        	    $this->setState(167);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(169);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::PUNTOYCOMA) {
		        	    	$this->setState(168);
		        	    	$this->match(self::PUNTOYCOMA);
		        	    }
		        	break;

		        	case 6:
		        	    $localContext = new Context\ReglaSentIncContext($localContext);
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(171);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(172);
		        	    $this->match(self::INC);
		        	    $this->setState(174);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::PUNTOYCOMA) {
		        	    	$this->setState(173);
		        	    	$this->match(self::PUNTOYCOMA);
		        	    }
		        	break;

		        	case 7:
		        	    $localContext = new Context\ReglaSentDecContext($localContext);
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(176);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(177);
		        	    $this->match(self::DEC);
		        	    $this->setState(179);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::PUNTOYCOMA) {
		        	    	$this->setState(178);
		        	    	$this->match(self::PUNTOYCOMA);
		        	    }
		        	break;

		        	case 8:
		        	    $localContext = new Context\ReglaSentIfContext($localContext);
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(181);
		        	    $this->match(self::IF);
		        	    $this->setState(186);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(182);
		        	    	    $this->sentSimple();
		        	    	    $this->setState(184);
		        	    	    $this->errorHandler->sync($this);
		        	    	    $_la = $this->input->LA(1);

		        	    	    if ($_la === self::PUNTOYCOMA) {
		        	    	    	$this->setState(183);
		        	    	    	$this->match(self::PUNTOYCOMA);
		        	    	    }
		        	    	break;
		        	    }
		        	    $this->setState(188);
		        	    $this->recursiveExpresion(0);
		        	    $this->setState(189);
		        	    $this->bloque();
		        	    $this->setState(195);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::ELSE) {
		        	    	$this->setState(190);
		        	    	$this->match(self::ELSE);
		        	    	$this->setState(193);
		        	    	$this->errorHandler->sync($this);

		        	    	switch ($this->getInterpreter()->adaptivePredict($this->input, 21, $this->ctx)) {
		        	    		case 1:
		        	    		    $this->setState(191);
		        	    		    $this->sentencia();
		        	    		break;

		        	    		case 2:
		        	    		    $this->setState(192);
		        	    		    $this->bloque();
		        	    		break;
		        	    	}
		        	    }
		        	break;

		        	case 9:
		        	    $localContext = new Context\ReglaSentSwitchContext($localContext);
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(197);
		        	    $this->match(self::SWITCH);
		        	    $this->setState(202);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 24, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(198);
		        	    	    $this->sentSimple();
		        	    	    $this->setState(200);
		        	    	    $this->errorHandler->sync($this);
		        	    	    $_la = $this->input->LA(1);

		        	    	    if ($_la === self::PUNTOYCOMA) {
		        	    	    	$this->setState(199);
		        	    	    	$this->match(self::PUNTOYCOMA);
		        	    	    }
		        	    	break;
		        	    }
		        	    $this->setState(205);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 21393064592941056) !== 0)) {
		        	    	$this->setState(204);
		        	    	$this->recursiveExpresion(0);
		        	    }
		        	    $this->setState(207);
		        	    $this->match(self::LLAVEIZQ);
		        	    $this->setState(211);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::CASE || $_la === self::DEFAULT) {
		        	    	$this->setState(208);
		        	    	$this->clausulaCaso();
		        	    	$this->setState(213);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	    $this->setState(214);
		        	    $this->match(self::LLAVEDER);
		        	break;

		        	case 10:
		        	    $localContext = new Context\ReglaSentForContext($localContext);
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(215);
		        	    $this->match(self::FOR);
		        	    $this->setState(218);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(216);
		        	    	    $this->clausulaFor();
		        	    	break;

		        	        case 2:
		        	    	    $this->setState(217);
		        	    	    $this->recursiveExpresion(0);
		        	    	break;
		        	    }
		        	    $this->setState(220);
		        	    $this->bloque();
		        	break;

		        	case 11:
		        	    $localContext = new Context\ReglaSentBreakContext($localContext);
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(221);
		        	    $this->match(self::BREAK);
		        	    $this->setState(223);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::PUNTOYCOMA) {
		        	    	$this->setState(222);
		        	    	$this->match(self::PUNTOYCOMA);
		        	    }
		        	break;

		        	case 12:
		        	    $localContext = new Context\ReglaSentContinueContext($localContext);
		        	    $this->enterOuterAlt($localContext, 12);
		        	    $this->setState(225);
		        	    $this->match(self::CONTINUE);
		        	    $this->setState(227);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::PUNTOYCOMA) {
		        	    	$this->setState(226);
		        	    	$this->match(self::PUNTOYCOMA);
		        	    }
		        	break;

		        	case 13:
		        	    $localContext = new Context\ReglaSentReturnContext($localContext);
		        	    $this->enterOuterAlt($localContext, 13);
		        	    $this->setState(229);
		        	    $this->match(self::RETURN);
		        	    $this->setState(231);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx)) {
		        	        case 1:
		        	    	    $this->setState(230);
		        	    	    $this->listaExpr();
		        	    	break;
		        	    }
		        	    $this->setState(234);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::PUNTOYCOMA) {
		        	    	$this->setState(233);
		        	    	$this->match(self::PUNTOYCOMA);
		        	    }
		        	break;

		        	case 14:
		        	    $localContext = new Context\ReglaSentExprContext($localContext);
		        	    $this->enterOuterAlt($localContext, 14);
		        	    $this->setState(236);
		        	    $this->listaExpr();
		        	    $this->setState(238);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::PUNTOYCOMA) {
		        	    	$this->setState(237);
		        	    	$this->match(self::PUNTOYCOMA);
		        	    }
		        	break;

		        	case 15:
		        	    $localContext = new Context\ReglaSentBloqueContext($localContext);
		        	    $this->enterOuterAlt($localContext, 15);
		        	    $this->setState(240);
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
		public function sentSimple(): Context\SentSimpleContext
		{
		    $localContext = new Context\SentSimpleContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_sentSimple);

		    try {
		        $this->setState(253);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 34, $this->ctx)) {
		        	case 1:
		        	    $localContext = new Context\ReglaSentSimpleVarCortaContext($localContext);
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(243);
		        	    $this->listaId();
		        	    $this->setState(244);
		        	    $this->match(self::DOSPUNTOS);
		        	    $this->setState(245);
		        	    $this->match(self::ASIGN);
		        	    $this->setState(246);
		        	    $this->listaExpr();
		        	break;

		        	case 2:
		        	    $localContext = new Context\ReglaSentSimpleAsignContext($localContext);
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(248);
		        	    $this->listaExpr();
		        	    $this->setState(249);
		        	    $this->opAsign();
		        	    $this->setState(250);
		        	    $this->listaExpr();
		        	break;

		        	case 3:
		        	    $localContext = new Context\ReglaSentSimpleExprContext($localContext);
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(252);
		        	    $this->listaExpr();
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
		public function opAsign(): Context\OpAsignContext
		{
		    $localContext = new Context\OpAsignContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_opAsign);

		    try {
		        $this->setState(260);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ASIGN:
		            	$localContext = new Context\ReglaOpAsignContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(255);
		            	$this->match(self::ASIGN);
		            	break;

		            case self::ASIGN_SUMA:
		            	$localContext = new Context\ReglaOpAsignSumaContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(256);
		            	$this->match(self::ASIGN_SUMA);
		            	break;

		            case self::ASIGN_RESTA:
		            	$localContext = new Context\ReglaOpAsignRestaContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(257);
		            	$this->match(self::ASIGN_RESTA);
		            	break;

		            case self::ASIGN_MULT:
		            	$localContext = new Context\ReglaOpAsignMultContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(258);
		            	$this->match(self::ASIGN_MULT);
		            	break;

		            case self::ASIGN_DIV:
		            	$localContext = new Context\ReglaOpAsignDivContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(259);
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
		public function clausulaFor(): Context\ClausulaForContext
		{
		    $localContext = new Context\ClausulaForContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_clausulaFor);

		    try {
		        $localContext = new Context\ReglaClausulaForContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(263);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 21393064592941056) !== 0)) {
		        	$this->setState(262);
		        	$this->sentSimple();
		        }
		        $this->setState(265);
		        $this->match(self::PUNTOYCOMA);
		        $this->setState(267);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 21393064592941056) !== 0)) {
		        	$this->setState(266);
		        	$this->recursiveExpresion(0);
		        }
		        $this->setState(269);
		        $this->match(self::PUNTOYCOMA);
		        $this->setState(271);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 21393064592941056) !== 0)) {
		        	$this->setState(270);
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
		public function clausulaCaso(): Context\ClausulaCasoContext
		{
		    $localContext = new Context\ClausulaCasoContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_clausulaCaso);

		    try {
		        $this->setState(290);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::CASE:
		            	$localContext = new Context\ReglaClausulaCasoContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(273);
		            	$this->match(self::CASE);
		            	$this->setState(274);
		            	$this->listaExpr();
		            	$this->setState(275);
		            	$this->match(self::DOSPUNTOS);
		            	$this->setState(279);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 309623440744660566) !== 0)) {
		            		$this->setState(276);
		            		$this->sentencia();
		            		$this->setState(281);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	break;

		            case self::DEFAULT:
		            	$localContext = new Context\ReglaClausulaDefaultContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(282);
		            	$this->match(self::DEFAULT);
		            	$this->setState(283);
		            	$this->match(self::DOSPUNTOS);
		            	$this->setState(287);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 309623440744660566) !== 0)) {
		            		$this->setState(284);
		            		$this->sentencia();
		            		$this->setState(289);
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
		public function listaExpr(): Context\ListaExprContext
		{
		    $localContext = new Context\ListaExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_listaExpr);

		    try {
		        $localContext = new Context\ReglaListaExprContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(292);
		        $this->recursiveExpresion(0);
		        $this->setState(297);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMA) {
		        	$this->setState(293);
		        	$this->match(self::COMA);
		        	$this->setState(294);
		        	$this->recursiveExpresion(0);
		        	$this->setState(299);
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
			$startState = 30;
			$this->enterRecursionRule($localContext, 30, self::RULE_expresion, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(312);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::NOT:
				    	$localContext = new Context\ReglaExprNotContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(301);
				    	$this->match(self::NOT);
				    	$this->setState(302);
				    	$this->recursiveExpresion(6);
				    	break;

				    case self::RESTA:
				    	$localContext = new Context\ReglaExprMenosUnarioContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(303);
				    	$this->match(self::RESTA);
				    	$this->setState(304);
				    	$this->recursiveExpresion(5);
				    	break;

				    case self::SUMA:
				    	$localContext = new Context\ReglaExprMasUnarioContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(305);
				    	$this->match(self::SUMA);
				    	$this->setState(306);
				    	$this->recursiveExpresion(4);
				    	break;

				    case self::ADDR:
				    	$localContext = new Context\ReglaExprDireccionContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(307);
				    	$this->match(self::ADDR);
				    	$this->setState(308);
				    	$this->recursiveExpresion(3);
				    	break;

				    case self::MULT:
				    	$localContext = new Context\ReglaExprDesreferenciaContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(309);
				    	$this->match(self::MULT);
				    	$this->setState(310);
				    	$this->recursiveExpresion(2);
				    	break;

				    case self::NIL:
				    case self::TRUE:
				    case self::FALSE:
				    case self::FMT:
				    case self::LEN:
				    case self::NOW:
				    case self::SUBSTR:
				    case self::TYPEOF:
				    case self::ID:
				    case self::ENTERO_LITERAL:
				    case self::FLOTANTE_LITERAL:
				    case self::CADENA_LITERAL:
				    case self::RUNA_LITERAL:
				    case self::PARENIZQ:
				    	$localContext = new Context\ReglaExprPrimarioContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(311);
				    	$this->recursivePrimario(0);
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(355);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 45, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(353);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 44, $this->ctx)) {
							case 1:
							    $localContext = new Context\ReglaExprOrLogicoContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(314);

							    if (!($this->precpred($this->ctx, 19))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 19)");
							    }
							    $this->setState(315);
							    $this->match(self::OR);
							    $this->setState(316);
							    $this->recursiveExpresion(20);
							break;

							case 2:
							    $localContext = new Context\ReglaExprAndLogicoContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(317);

							    if (!($this->precpred($this->ctx, 18))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 18)");
							    }
							    $this->setState(318);
							    $this->match(self::AND);
							    $this->setState(319);
							    $this->recursiveExpresion(19);
							break;

							case 3:
							    $localContext = new Context\ReglaExprIgualdadContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(320);

							    if (!($this->precpred($this->ctx, 17))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 17)");
							    }
							    $this->setState(321);
							    $this->match(self::EQ);
							    $this->setState(322);
							    $this->recursiveExpresion(18);
							break;

							case 4:
							    $localContext = new Context\ReglaExprDesigualdadContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(323);

							    if (!($this->precpred($this->ctx, 16))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 16)");
							    }
							    $this->setState(324);
							    $this->match(self::NEQ);
							    $this->setState(325);
							    $this->recursiveExpresion(17);
							break;

							case 5:
							    $localContext = new Context\ReglaExprMayorContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(326);

							    if (!($this->precpred($this->ctx, 15))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 15)");
							    }
							    $this->setState(327);
							    $this->match(self::GT);
							    $this->setState(328);
							    $this->recursiveExpresion(16);
							break;

							case 6:
							    $localContext = new Context\ReglaExprMayorIgualContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(329);

							    if (!($this->precpred($this->ctx, 14))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 14)");
							    }
							    $this->setState(330);
							    $this->match(self::GTE);
							    $this->setState(331);
							    $this->recursiveExpresion(15);
							break;

							case 7:
							    $localContext = new Context\ReglaExprMenorContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(332);

							    if (!($this->precpred($this->ctx, 13))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 13)");
							    }
							    $this->setState(333);
							    $this->match(self::LT);
							    $this->setState(334);
							    $this->recursiveExpresion(14);
							break;

							case 8:
							    $localContext = new Context\ReglaExprMenorIgualContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(335);

							    if (!($this->precpred($this->ctx, 12))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 12)");
							    }
							    $this->setState(336);
							    $this->match(self::LTE);
							    $this->setState(337);
							    $this->recursiveExpresion(13);
							break;

							case 9:
							    $localContext = new Context\ReglaExprSumaContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(338);

							    if (!($this->precpred($this->ctx, 11))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 11)");
							    }
							    $this->setState(339);
							    $this->match(self::SUMA);
							    $this->setState(340);
							    $this->recursiveExpresion(12);
							break;

							case 10:
							    $localContext = new Context\ReglaExprRestaContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(341);

							    if (!($this->precpred($this->ctx, 10))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 10)");
							    }
							    $this->setState(342);
							    $this->match(self::RESTA);
							    $this->setState(343);
							    $this->recursiveExpresion(11);
							break;

							case 11:
							    $localContext = new Context\ReglaExprMultContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(344);

							    if (!($this->precpred($this->ctx, 9))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 9)");
							    }
							    $this->setState(345);
							    $this->match(self::MULT);
							    $this->setState(346);
							    $this->recursiveExpresion(10);
							break;

							case 12:
							    $localContext = new Context\ReglaExprDivContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(347);

							    if (!($this->precpred($this->ctx, 8))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 8)");
							    }
							    $this->setState(348);
							    $this->match(self::DIV);
							    $this->setState(349);
							    $this->recursiveExpresion(9);
							break;

							case 13:
							    $localContext = new Context\ReglaExprModContext(new Context\ExpresionContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_expresion);
							    $this->setState(350);

							    if (!($this->precpred($this->ctx, 7))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 7)");
							    }
							    $this->setState(351);
							    $this->match(self::MOD);
							    $this->setState(352);
							    $this->recursiveExpresion(8);
							break;
						} 
					}

					$this->setState(357);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 45, $this->ctx);
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
			$startState = 32;
			$this->enterRecursionRule($localContext, 32, self::RULE_primario, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(393);
				$this->errorHandler->sync($this);

				switch ($this->input->LA(1)) {
				    case self::FMT:
				    	$localContext = new Context\ReglaPrimarioPrintlnContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;

				    	$this->setState(359);
				    	$this->match(self::FMT);
				    	$this->setState(360);
				    	$this->match(self::PUNTO);
				    	$this->setState(361);
				    	$this->match(self::PRINTLN);
				    	$this->setState(362);
				    	$this->argumentos();
				    	break;

				    case self::LEN:
				    	$localContext = new Context\ReglaPrimarioLenContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(363);
				    	$this->match(self::LEN);
				    	$this->setState(364);
				    	$this->match(self::PARENIZQ);
				    	$this->setState(366);
				    	$this->errorHandler->sync($this);
				    	$_la = $this->input->LA(1);

				    	if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 21393064592941056) !== 0)) {
				    		$this->setState(365);
				    		$this->recursiveExpresion(0);
				    	}
				    	$this->setState(368);
				    	$this->match(self::PARENDER);
				    	break;

				    case self::NOW:
				    	$localContext = new Context\ReglaPrimarioNowContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(369);
				    	$this->match(self::NOW);
				    	$this->setState(370);
				    	$this->match(self::PARENIZQ);
				    	$this->setState(371);
				    	$this->match(self::PARENDER);
				    	break;

				    case self::SUBSTR:
				    	$localContext = new Context\ReglaPrimarioSubstrContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(372);
				    	$this->match(self::SUBSTR);
				    	$this->setState(373);
				    	$this->match(self::PARENIZQ);
				    	$this->setState(374);
				    	$this->recursiveExpresion(0);
				    	$this->setState(375);
				    	$this->match(self::COMA);
				    	$this->setState(376);
				    	$this->recursiveExpresion(0);
				    	$this->setState(377);
				    	$this->match(self::COMA);
				    	$this->setState(378);
				    	$this->recursiveExpresion(0);
				    	$this->setState(379);
				    	$this->match(self::PARENDER);
				    	break;

				    case self::TYPEOF:
				    	$localContext = new Context\ReglaPrimarioTypeOfContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(381);
				    	$this->match(self::TYPEOF);
				    	$this->setState(382);
				    	$this->match(self::PARENIZQ);
				    	$this->setState(383);
				    	$this->recursiveExpresion(0);
				    	$this->setState(384);
				    	$this->match(self::PARENDER);
				    	break;

				    case self::TRUE:
				    case self::FALSE:
				    case self::ENTERO_LITERAL:
				    case self::FLOTANTE_LITERAL:
				    case self::CADENA_LITERAL:
				    case self::RUNA_LITERAL:
				    	$localContext = new Context\ReglaPrimarioLiteralContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(386);
				    	$this->literal();
				    	break;

				    case self::ID:
				    	$localContext = new Context\ReglaPrimarioIdContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(387);
				    	$this->match(self::ID);
				    	break;

				    case self::NIL:
				    	$localContext = new Context\ReglaPrimarioNilContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(388);
				    	$this->match(self::NIL);
				    	break;

				    case self::PARENIZQ:
				    	$localContext = new Context\ReglaPrimarioParentesisContext($localContext);
				    	$this->ctx = $localContext;
				    	$previousContext = $localContext;
				    	$this->setState(389);
				    	$this->match(self::PARENIZQ);
				    	$this->setState(390);
				    	$this->recursiveExpresion(0);
				    	$this->setState(391);
				    	$this->match(self::PARENDER);
				    	break;

				default:
					throw new NoViableAltException($this);
				}
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(407);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 49, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$this->setState(405);
						$this->errorHandler->sync($this);

						switch ($this->getInterpreter()->adaptivePredict($this->input, 48, $this->ctx)) {
							case 1:
							    $localContext = new Context\ReglaPrimarioIndiceContext(new Context\PrimarioContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_primario);
							    $this->setState(395);

							    if (!($this->precpred($this->ctx, 3))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 3)");
							    }
							    $this->setState(396);
							    $this->match(self::CORCHIZQ);
							    $this->setState(397);
							    $this->recursiveExpresion(0);
							    $this->setState(398);
							    $this->match(self::CORCHDER);
							break;

							case 2:
							    $localContext = new Context\ReglaPrimarioLlamadaContext(new Context\PrimarioContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_primario);
							    $this->setState(400);

							    if (!($this->precpred($this->ctx, 2))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
							    }
							    $this->setState(401);
							    $this->argumentos();
							break;

							case 3:
							    $localContext = new Context\ReglaPrimarioMiembroContext(new Context\PrimarioContext($parentContext, $parentState));
							    $this->pushNewRecursionContext($localContext, $startState, self::RULE_primario);
							    $this->setState(402);

							    if (!($this->precpred($this->ctx, 1))) {
							        throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 1)");
							    }
							    $this->setState(403);
							    $this->match(self::PUNTO);
							    $this->setState(404);
							    $this->match(self::ID);
							break;
						} 
					}

					$this->setState(409);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 49, $this->ctx);
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
		public function argumentos(): Context\ArgumentosContext
		{
		    $localContext = new Context\ArgumentosContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_argumentos);

		    try {
		        $localContext = new Context\ReglaArgumentosContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(410);
		        $this->match(self::PARENIZQ);
		        $this->setState(412);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 21393064592941056) !== 0)) {
		        	$this->setState(411);
		        	$this->listaExpr();
		        }
		        $this->setState(414);
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

		    $this->enterRule($localContext, 36, self::RULE_literal);

		    try {
		        $this->setState(422);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::ENTERO_LITERAL:
		            	$localContext = new Context\ReglaLiteralEnteroContext($localContext);
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(416);
		            	$this->match(self::ENTERO_LITERAL);
		            	break;

		            case self::FLOTANTE_LITERAL:
		            	$localContext = new Context\ReglaLiteralFlotanteContext($localContext);
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(417);
		            	$this->match(self::FLOTANTE_LITERAL);
		            	break;

		            case self::CADENA_LITERAL:
		            	$localContext = new Context\ReglaLiteralCadenaContext($localContext);
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(418);
		            	$this->match(self::CADENA_LITERAL);
		            	break;

		            case self::RUNA_LITERAL:
		            	$localContext = new Context\ReglaLiteralRunaContext($localContext);
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(419);
		            	$this->match(self::RUNA_LITERAL);
		            	break;

		            case self::TRUE:
		            	$localContext = new Context\ReglaLiteralVerdaderoContext($localContext);
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(420);
		            	$this->match(self::TRUE);
		            	break;

		            case self::FALSE:
		            	$localContext = new Context\ReglaLiteralFalsoContext($localContext);
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(421);
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

		    $this->enterRule($localContext, 38, self::RULE_listaId);

		    try {
		        $localContext = new Context\ReglaListaIdContext($localContext);
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(424);
		        $this->match(self::ID);
		        $this->setState(429);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMA) {
		        	$this->setState(425);
		        	$this->match(self::COMA);
		        	$this->setState(426);
		        	$this->match(self::ID);
		        	$this->setState(431);
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
					case 15:
						return $this->sempredExpresion($localContext, $predicateIndex);

					case 16:
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
	use GolampiVisitor;
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrograma($this);
		    }

			return $visitor->visitChildren($this);
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
			    $listener->enterReglaDeclVar($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaDeclVar($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaDeclVar($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaDeclConstContext extends DeclaracionContext
	{
		public function __construct(DeclaracionContext $context)
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
			    $listener->enterReglaDeclConst($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaDeclConst($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaDeclConst($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaDeclFuncContext extends DeclaracionContext
	{
		public function __construct(DeclaracionContext $context)
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
			    $listener->enterReglaDeclFunc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaDeclFunc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaDeclFunc($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaListaParam($this);
		    }

			return $visitor->visitChildren($this);
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

	class ReglaParamPunteroContext extends ParamContext
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
			    $listener->enterReglaParamPuntero($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaParamPuntero($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaParamPuntero($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaParam($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTipoRetornoMultiple($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitTipoRetornoSimple($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaListaTipos($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaTipoInt32($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaTipoBool($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaTipoRune($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaTipoString($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaTipoFloat32($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaTipoPuntero($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaTipoArray($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaTipoArrayExpr($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaBloqueStmt($this);
		    }

			return $visitor->visitChildren($this);
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

	class ReglaSentDecContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
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
			    $listener->enterReglaSentDec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentDec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentDec($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentReturnContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function RETURN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::RETURN, 0);
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
			    $listener->enterReglaSentReturn($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentReturn($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentReturn($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentVarContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
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

	    public function ASIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ASIGN, 0);
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
			    $listener->enterReglaSentVar($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentVar($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentVar($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentAsignContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
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
			    $listener->enterReglaSentAsign($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentAsign($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentAsign($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentSwitchContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
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

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentSwitch($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentForContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
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
			    $listener->enterReglaSentFor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentFor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentFor($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentVarCortaContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function listaId(): ?ListaIdContext
	    {
	    	return $this->getTypedRuleContext(ListaIdContext::class, 0);
	    }

	    public function DOSPUNTOS(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::DOSPUNTOS, 0);
	    }

	    public function ASIGN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ASIGN, 0);
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
			    $listener->enterReglaSentVarCorta($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentVarCorta($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentVarCorta($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentContinueContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
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
			    $listener->enterReglaSentContinue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentContinue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentContinue($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentConstContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
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
			    $listener->enterReglaSentConst($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentConst($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentConst($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentIfContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
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

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ELSE, 0);
	    }

	    public function sentencia(): ?SentenciaContext
	    {
	    	return $this->getTypedRuleContext(SentenciaContext::class, 0);
	    }

	    public function PUNTOYCOMA(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTOYCOMA, 0);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentIf($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentAsignIndiceContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
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

	    public function CORCHDER(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CORCHDER, 0);
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
			    $listener->enterReglaSentAsignIndice($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentAsignIndice($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentAsignIndice($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentIncContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
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
			    $listener->enterReglaSentInc($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentInc($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentInc($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentBreakContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
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
			    $listener->enterReglaSentBreak($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentBreak($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentBreak($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentExprContext extends SentenciaContext
	{
		public function __construct(SentenciaContext $context)
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
			    $listener->enterReglaSentExpr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentExpr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentExpr($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentBloque($this);
		    }

			return $visitor->visitChildren($this);
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

	    public function listaExpr(): ?ListaExprContext
	    {
	    	return $this->getTypedRuleContext(ListaExprContext::class, 0);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentSimpleExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentSimpleAsignContext extends SentSimpleContext
	{
		public function __construct(SentSimpleContext $context)
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentSimpleAsign($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaSentSimpleVarCortaContext extends SentSimpleContext
	{
		public function __construct(SentSimpleContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function listaId(): ?ListaIdContext
	    {
	    	return $this->getTypedRuleContext(ListaIdContext::class, 0);
	    }

	    public function DOSPUNTOS(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::DOSPUNTOS, 0);
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
			    $listener->enterReglaSentSimpleVarCorta($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaSentSimpleVarCorta($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaSentSimpleVarCorta($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaOpAsignResta($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaOpAsignSuma($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaOpAsignDiv($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaOpAsign($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaOpAsignMult($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaClausulaFor($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaClausulaDefault($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaClausulaCaso($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaListaExpr($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprDiv($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprNot($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprDesigualdad($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprAndLogico($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprMenor($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprMult($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprDesreferencia($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprMasUnario($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprIgualdad($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprSuma($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprMayorIgual($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprMenorIgual($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprMod($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprMenosUnario($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprOrLogico($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprResta($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprPrimario($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprMayor($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaExprDireccion($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrimarioMiembro($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrimarioNil($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrimarioIndice($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaPrimarioPrintlnContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function FMT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FMT, 0);
	    }

	    public function PUNTO(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PUNTO, 0);
	    }

	    public function PRINTLN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PRINTLN, 0);
	    }

	    public function argumentos(): ?ArgumentosContext
	    {
	    	return $this->getTypedRuleContext(ArgumentosContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrimarioPrintln($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioPrintln($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrimarioPrintln($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaPrimarioLenContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function LEN(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::LEN, 0);
	    }

	    public function PARENIZQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENIZQ, 0);
	    }

	    public function PARENDER(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENDER, 0);
	    }

	    public function expresion(): ?ExpresionContext
	    {
	    	return $this->getTypedRuleContext(ExpresionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrimarioLen($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioLen($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrimarioLen($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrimarioId($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrimarioParentesis($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrimarioLiteral($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrimarioLlamada($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaPrimarioNowContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function NOW(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::NOW, 0);
	    }

	    public function PARENIZQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENIZQ, 0);
	    }

	    public function PARENDER(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENDER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrimarioNow($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioNow($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrimarioNow($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaPrimarioTypeOfContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function TYPEOF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::TYPEOF, 0);
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
			    $listener->enterReglaPrimarioTypeOf($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioTypeOf($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrimarioTypeOf($this);
		    }

			return $visitor->visitChildren($this);
		}
	}

	class ReglaPrimarioSubstrContext extends PrimarioContext
	{
		public function __construct(PrimarioContext $context)
		{
		    parent::__construct($context);

		    $this->copyFrom($context);
	    }

	    public function SUBSTR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::SUBSTR, 0);
	    }

	    public function PARENIZQ(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENIZQ, 0);
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

	    public function PARENDER(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::PARENDER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReglaPrimarioSubstr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReglaPrimarioSubstr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaPrimarioSubstr($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaArgumentos($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaLiteralRuna($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaLiteralCadena($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaLiteralFlotante($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaLiteralVerdadero($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaLiteralEntero($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaLiteralFalso($this);
		    }

			return $visitor->visitChildren($this);
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

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReglaListaId($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}