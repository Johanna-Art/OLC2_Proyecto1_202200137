grammar Golampi;

// ========================================
// REGLAS SINTÁCTICAS 
// ========================================

programa
    : declaracion* EOF                                   # ReglaPrograma
    ;

declaracion
    : declVar                                            # ReglaDeclVar
    | declConst                                          # ReglaDeclConst
    | declFunc                                           # ReglaDeclFunc
    ;

// Declaración de variables
declVar
    : VAR listaId tipo ('=' listaExpr)? PUNTOYCOMA       # StmtDeclVar
    ;

// Declaración corta
declVarCorta
    : listaId ':=' listaExpr PUNTOYCOMA                  # StmtDeclVarCorta
    ;

// Declaración de constantes 
declConst
    : CONST ID tipo '=' expresion PUNTOYCOMA             # StmtDeclConst
    ;

// Declaración de funciones
declFunc
    : FUNC ID '(' listaParam? ')' tipoRetorno? bloque    # StmtDeclFunc
    ;

listaParam
    : param (COMA param)*                                # ReglaListaParam
    ;

param
    : ID tipo                                            # ReglaParam
    ;

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
    | '*' tipo                                           # ReglaTipoPuntero
    ;

tipoArray
    : '[' expresion ']' tipo                             # ReglaTipoArrayExpr
    ;

// Bloques de código
bloque
    : LLAVEIZQ sentencia* LLAVEDER                       # ReglaBloqueStmt
    ;

// Sentencias 
sentencia
    : declVar                                            # ReglaSentVar
    | declVarCorta                                       # ReglaSentVarCorta
    | declConst                                          # ReglaSentConst
    | sentAsign                                          # ReglaSentAsign
    | sentIncDec                                         # ReglaSentIncDec
    | sentIf                                             # ReglaSentIf
    | sentSwitch                                         # ReglaSentSwitch
    | sentFor                                            # ReglaSentFor
    | sentBreak                                          # ReglaSentBreak
    | sentContinue                                       # ReglaSentContinue
    | sentReturn                                         # ReglaSentReturn
    | sentExpr                                           # ReglaSentExpr
    | bloque                                             # ReglaSentBloque
    ;

sentAsign
    : listaExpr opAsign listaExpr PUNTOYCOMA             # StmtSentAsign
    ;

opAsign
    : ASIGN                                              # ReglaOpAsign
    | ASIGN_SUMA                                         # ReglaOpAsignSuma
    | ASIGN_RESTA                                        # ReglaOpAsignResta
    | ASIGN_MULT                                         # ReglaOpAsignMult
    | ASIGN_DIV                                          # ReglaOpAsignDiv
    ;

sentIncDec
    : expresion INC PUNTOYCOMA                           # StmtSentInc
    | expresion DEC PUNTOYCOMA                           # StmtSentDec
    ;

// if
sentIf
    : IF (sentSimple PUNTOYCOMA)? expresion bloque (ELSE (sentIf | bloque))?  # StmtSentIfElse
    ;

sentSimple
    : declVarCorta                                       # ReglaSentSimpleVarCorta
    | sentAsign                                          # ReglaSentSimpleAsign
    | sentExpr                                           # ReglaSentSimpleExpr
    ;

// switch
sentSwitch
    : SWITCH (sentSimple PUNTOYCOMA)? expresion? LLAVEIZQ clausulaCaso* LLAVEDER  # ReglaSentSwitchCtx
    ;

clausulaCaso
    : CASE listaExpr DOSPUNTOS sentencia*                # ReglaClausulaCaso
    | DEFAULT DOSPUNTOS sentencia*                       # ReglaClausulaDefault
    ;

// for
sentFor
    : FOR (clausulaFor | expresion)? bloque              # ReglaSentForCtx
    ;

clausulaFor
    : (sentSimple)? PUNTOYCOMA expresion? PUNTOYCOMA expresion?  # ReglaClausulaFor
    ;

// break
sentBreak
    : BREAK PUNTOYCOMA                                   # ReglaSentBreakCtx
    ;

// continue 
sentContinue
    : CONTINUE PUNTOYCOMA                                # ReglaSentContinueCtx
    ;

sentReturn
    : RETURN listaExpr? PUNTOYCOMA                       # ReglaSentReturnCtx
    ;

sentExpr
    : listaExpr PUNTOYCOMA                               # ReglaSentExprCtx
    ;

// Expresiones 
listaExpr
    : expresion (COMA expresion)*                        # ReglaListaExpr
    ;

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
    | '&' expresion                                      # ReglaExprDireccion
    | '*' expresion                                      # ReglaExprDesreferencia
    | primario                                           # ReglaExprPrimario
    ;

primario
    : literal                                            # ReglaPrimarioLiteral
    | ID                                                 # ReglaPrimarioId
    | NIL                                                # ReglaPrimarioNil
    | '(' expresion ')'                                  # ReglaPrimarioParentesis
    | llamadaBuiltIn                                     # ReglaPrimarioLlamadaBuiltIn
    | primario CORCHIZQ expresion CORCHDER               # ReglaPrimarioIndice
    | primario argumentos                                # ReglaPrimarioLlamada
    | primario '.' ID                                    # ReglaPrimarioMiembro
    ;

llamadaBuiltIn
    : ID '.' 'Println' argumentos                        # ReglaLlamadaPrintln
    | 'len' argumentos                                   # ReglaLlamadaLen
    | 'now' argumentos                                   # ReglaLlamadaNow
    | 'substr' argumentos                                # ReglaLlamadaSubstr
    | 'typeOf' argumentos                                # ReglaLlamadaTypeOf
    ;

argumentos
    : PARENIZQ listaExpr? PARENDER                      # ReglaArgumentos
    ;

literal
    : ENTERO_LITERAL                                     # ReglaLiteralEntero
    | FLOTANTE_LITERAL                                   # ReglaLiteralFlotante
    | CADENA_LITERAL                                     # ReglaLiteralCadena
    | RUNA_LITERAL                                       # ReglaLiteralRuna
    | TRUE                                               # ReglaLiteralVerdadero
    | FALSE                                              # ReglaLiteralFalso
    ;

listaId
    : ID (COMA ID)*                                      # ReglaListaId
    ;

// ========================================
// REGLAS LÉXICAS 
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

// Booleanos literales en INGLÉS
TRUE: 'true';
FALSE: 'false';

// Identificadores
ID: [a-zA-Z_][a-zA-Z0-9_]*;

// Literales numéricos
ENTERO_LITERAL: [0-9]+;
FLOTANTE_LITERAL: [0-9]+'.'[0-9]+;

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