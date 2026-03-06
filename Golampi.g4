grammar Golampi;

// ========================================
// REGLAS SINTÁCTICAS - PARSER
// ========================================

// Programa principal
programa
    : declaracion* EOF                                   # ReglaPrograma
    ;

// Declaraciones a nivel de programa 
declaracion
    : VAR listaId tipo ('=' listaExpr)? PUNTOYCOMA       # ReglaDeclVar
    | CONST ID tipo '=' expresion PUNTOYCOMA             # ReglaDeclConst
    | FUNC ID '(' listaParam? ')' tipoRetorno? bloque    # ReglaDeclFunc
    ;

// Parámetros de función
listaParam
    : param (COMA param)*                                # ReglaListaParam
    ;

param
    : ID tipo                                            # ReglaParam
    | ID MULT tipo                                       # ReglaParamPuntero
    ;

// Tipo de retorno de función
tipoRetorno
    : tipo                                               # TipoRetornoSimple
    | '(' listaTipos ')'                                 # TipoRetornoMultiple
    ;

listaTipos
    : tipo (COMA tipo)*                                  # ReglaListaTipos
    ;

// Tipos de datos
tipo
    : INT32                                              # ReglaTipoInt32
    | FLOAT32                                            # ReglaTipoFloat32
    | BOOL                                               # ReglaTipoBool
    | RUNE                                               # ReglaTipoRune
    | STRING_TYPE                                        # ReglaTipoString
    | tipoArray                                          # ReglaTipoArray
    | MULT tipo                                          # ReglaTipoPuntero
    ;

tipoArray
    : '[' expresion ']' tipo                             # ReglaTipoArrayExpr
    ;

// Bloque de código
bloque
    : LLAVEIZQ sentencia* LLAVEDER                       # ReglaBloqueStmt
    ;

// ========================================
// SENTENCIAS - INLINE 
// ========================================
sentencia
    : VAR listaId tipo ('=' listaExpr)? PUNTOYCOMA?        # ReglaSentVar
    | listaId DOSPUNTOS ASIGN listaExpr PUNTOYCOMA?        # ReglaSentVarCorta
    | CONST ID tipo '=' expresion PUNTOYCOMA?              # ReglaSentConst
    | listaExpr opAsign listaExpr PUNTOYCOMA?              # ReglaSentAsign
    | primario '[' expresion ']' opAsign expresion PUNTOYCOMA?  # ReglaSentAsignIndice
    | expresion INC PUNTOYCOMA?                            # ReglaSentInc
    | expresion DEC PUNTOYCOMA?                            # ReglaSentDec
    | IF (sentSimple PUNTOYCOMA?)? expresion bloque (ELSE (sentencia | bloque))?  # ReglaSentIf
    | SWITCH (sentSimple PUNTOYCOMA?)? expresion? LLAVEIZQ clausulaCaso* LLAVEDER  # ReglaSentSwitch
    | FOR (clausulaFor | expresion)? bloque                # ReglaSentFor
    | BREAK PUNTOYCOMA?                                    # ReglaSentBreak
    | CONTINUE PUNTOYCOMA?                                 # ReglaSentContinue
    | RETURN listaExpr? PUNTOYCOMA?                        # ReglaSentReturn
    | listaExpr PUNTOYCOMA?                                # ReglaSentExpr
    | bloque                                               # ReglaSentBloque
    ;

// Sentencias simples para if/for/switch
sentSimple
    : listaId DOSPUNTOS ASIGN listaExpr                  # ReglaSentSimpleVarCorta
    | listaExpr opAsign listaExpr                        # ReglaSentSimpleAsign
    | listaExpr                                          # ReglaSentSimpleExpr
    ;

// Operadores de asignación
opAsign
    : ASIGN                                              # ReglaOpAsign
    | ASIGN_SUMA                                         # ReglaOpAsignSuma
    | ASIGN_RESTA                                        # ReglaOpAsignResta
    | ASIGN_MULT                                         # ReglaOpAsignMult
    | ASIGN_DIV                                          # ReglaOpAsignDiv
    ;

// Clausulas de for
clausulaFor
    : (sentSimple)? PUNTOYCOMA expresion? PUNTOYCOMA expresion?  # ReglaClausulaFor
    ;

// Clausulas de switch
clausulaCaso
    : CASE listaExpr DOSPUNTOS sentencia*                # ReglaClausulaCaso
    | DEFAULT DOSPUNTOS sentencia*                       # ReglaClausulaDefault
    ;

// ========================================
// EXPRESIONES
// ========================================

// Lista de expresiones 
listaExpr
    : expresion (COMA expresion)*                        # ReglaListaExpr
    ;

// Expresiones con precedencia 
expresion
    : expresion OR expresion                             # ReglaExprOrLogico
    | expresion AND expresion                            # ReglaExprAndLogico
    | expresion EQ expresion                             # ReglaExprIgualdad
    | expresion NEQ expresion                            # ReglaExprDesigualdad
    | expresion GT expresion                             # ReglaExprMayor
    | expresion GTE expresion                            # ReglaExprMayorIgual
    | expresion LT expresion                             # ReglaExprMenor
    | expresion LTE expresion                            # ReglaExprMenorIgual
    | expresion SUMA expresion                           # ReglaExprSuma
    | expresion RESTA expresion                          # ReglaExprResta
    | expresion MULT expresion                           # ReglaExprMult
    | expresion DIV expresion                            # ReglaExprDiv
    | expresion MOD expresion                            # ReglaExprMod
    | NOT expresion                                      # ReglaExprNot
    | RESTA expresion                                    # ReglaExprMenosUnario
    | SUMA expresion                                     # ReglaExprMasUnario
    | ADDR expresion                                     # ReglaExprDireccion
    | MULT expresion                                     # ReglaExprDesreferencia
    | primario                                           # ReglaExprPrimario
    ;

// =========
// PRIMARIO 
// =========
primario
   
    : FMT PUNTO PRINTLN argumentos                      # ReglaPrimarioPrintln
    | LEN PARENIZQ expresion? PARENDER                  # ReglaPrimarioLen
    | NOW PARENIZQ PARENDER                             # ReglaPrimarioNow
    | SUBSTR PARENIZQ expresion COMA expresion COMA expresion PARENDER  # ReglaPrimarioSubstr
    | TYPEOF PARENIZQ expresion PARENDER                # ReglaPrimarioTypeOf
    
    | literal                                           # ReglaPrimarioLiteral
    | ID                                                # ReglaPrimarioId
    | NIL                                               # ReglaPrimarioNil
    | '(' expresion ')'                                 # ReglaPrimarioParentesis
    | primario '[' expresion ']'                        # ReglaPrimarioIndice
    | primario argumentos                               # ReglaPrimarioLlamada
    | primario PUNTO ID                                 # ReglaPrimarioMiembro
    ;

// Argumentos de función
argumentos
    : PARENIZQ listaExpr? PARENDER                      # ReglaArgumentos
    ;

// Literales
literal
    : ENTERO_LITERAL                                     # ReglaLiteralEntero
    | FLOTANTE_LITERAL                                   # ReglaLiteralFlotante
    | CADENA_LITERAL                                     # ReglaLiteralCadena
    | RUNA_LITERAL                                       # ReglaLiteralRuna
    | TRUE                                               # ReglaLiteralVerdadero
    | FALSE                                              # ReglaLiteralFalso
    ;

// Lista de identificadores
listaId
    : ID (COMA ID)*                                      # ReglaListaId
    ;

// ========================================
// REGLAS LÉXICAS - LEXER
// ========================================

// Palabras reservadas
VAR: 'var';
CONST: 'const';
FUNC: 'func';
IF: 'if';
ELSE: 'else';
SWITCH: 'switch';
CASE: 'case';
DEFAULT: 'default';
FOR: 'for';
BREAK: 'break';
CONTINUE: 'continue';
RETURN: 'return';
NIL: 'nil';

// Tipos de datos
INT32: 'int32';
FLOAT32: 'float32';
BOOL: 'bool';
RUNE: 'rune';
STRING_TYPE: 'string';

// Booleanos literales
TRUE: 'true';
FALSE: 'false';

FMT: 'fmt';
PRINTLN: 'Println';
LEN: 'len';
NOW: 'now';
SUBSTR: 'substr';
TYPEOF: 'typeOf';

// Identificadores 
ID: [a-zA-Z_][a-zA-Z0-9_]*;

// Literales numéricos
ENTERO_LITERAL: [0-9]+;
FLOTANTE_LITERAL: [0-9]+ '.' [0-9]+;

// Cadenas y runas
CADENA_LITERAL: '"' (~["\\] | '\\' .)* '"';
RUNA_LITERAL: '\'' (~['\\] | '\\' .) '\'';

// Operadores
ASIGN: '=';
ASIGN_SUMA: '+=';
ASIGN_RESTA: '-=';
ASIGN_MULT: '*=';
ASIGN_DIV: '/=';
SUMA: '+';
RESTA: '-';
MULT: '*';
DIV: '/';
MOD: '%';
EQ: '==';
NEQ: '!=';
LT: '<';
LTE: '<=';
GT: '>';
GTE: '>=';
AND: '&&';
OR: '||';
NOT: '!';
ADDR: '&';

// Incremento/decremento
INC: '++';
DEC: '--';

// Delimitadores
PARENIZQ: '(';
PARENDER: ')';
CORCHIZQ: '[';
CORCHDER: ']';
LLAVEIZQ: '{';
LLAVEDER: '}';
COMA: ',';
DOSPUNTOS: ':';
PUNTOYCOMA: ';';
PUNTO: '.';

// Comentarios
COMENTARIO_LINEA: '//' ~[\r\n]* -> skip;
COMENTARIO_BLOQUE: '/*' .*? '*/' -> skip;

// Espacios en blanco
ESPACIO: [ \t\r\n]+ -> skip;