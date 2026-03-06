<?php

/*
 * Generated from Golampi.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see GolampiParser}.
 */
interface GolampiVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by the `ReglaPrograma` labeled alternative
	 * in {@see GolampiParser::programa()}.
	 *
	 * @param Context\ReglaProgramaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrograma(Context\ReglaProgramaContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaDeclVar` labeled alternative
	 * in {@see GolampiParser::declaracion()}.
	 *
	 * @param Context\ReglaDeclVarContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaDeclVar(Context\ReglaDeclVarContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaDeclConst` labeled alternative
	 * in {@see GolampiParser::declaracion()}.
	 *
	 * @param Context\ReglaDeclConstContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaDeclConst(Context\ReglaDeclConstContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaDeclFunc` labeled alternative
	 * in {@see GolampiParser::declaracion()}.
	 *
	 * @param Context\ReglaDeclFuncContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaDeclFunc(Context\ReglaDeclFuncContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaListaParam` labeled alternative
	 * in {@see GolampiParser::listaParam()}.
	 *
	 * @param Context\ReglaListaParamContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaListaParam(Context\ReglaListaParamContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaParam` labeled alternative
	 * in {@see GolampiParser::param()}.
	 *
	 * @param Context\ReglaParamContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaParam(Context\ReglaParamContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaParamPuntero` labeled alternative
	 * in {@see GolampiParser::param()}.
	 *
	 * @param Context\ReglaParamPunteroContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaParamPuntero(Context\ReglaParamPunteroContext $context);

	/**
	 * Visit a parse tree produced by the `TipoRetornoSimple` labeled alternative
	 * in {@see GolampiParser::tipoRetorno()}.
	 *
	 * @param Context\TipoRetornoSimpleContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTipoRetornoSimple(Context\TipoRetornoSimpleContext $context);

	/**
	 * Visit a parse tree produced by the `TipoRetornoMultiple` labeled alternative
	 * in {@see GolampiParser::tipoRetorno()}.
	 *
	 * @param Context\TipoRetornoMultipleContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTipoRetornoMultiple(Context\TipoRetornoMultipleContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaListaTipos` labeled alternative
	 * in {@see GolampiParser::listaTipos()}.
	 *
	 * @param Context\ReglaListaTiposContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaListaTipos(Context\ReglaListaTiposContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaTipoInt32` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 *
	 * @param Context\ReglaTipoInt32Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaTipoInt32(Context\ReglaTipoInt32Context $context);

	/**
	 * Visit a parse tree produced by the `ReglaTipoFloat32` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 *
	 * @param Context\ReglaTipoFloat32Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaTipoFloat32(Context\ReglaTipoFloat32Context $context);

	/**
	 * Visit a parse tree produced by the `ReglaTipoBool` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 *
	 * @param Context\ReglaTipoBoolContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaTipoBool(Context\ReglaTipoBoolContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaTipoRune` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 *
	 * @param Context\ReglaTipoRuneContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaTipoRune(Context\ReglaTipoRuneContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaTipoString` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 *
	 * @param Context\ReglaTipoStringContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaTipoString(Context\ReglaTipoStringContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaTipoArray` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 *
	 * @param Context\ReglaTipoArrayContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaTipoArray(Context\ReglaTipoArrayContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaTipoPuntero` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 *
	 * @param Context\ReglaTipoPunteroContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaTipoPuntero(Context\ReglaTipoPunteroContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaTipoArrayExpr` labeled alternative
	 * in {@see GolampiParser::tipoArray()}.
	 *
	 * @param Context\ReglaTipoArrayExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaTipoArrayExpr(Context\ReglaTipoArrayExprContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaBloqueStmt` labeled alternative
	 * in {@see GolampiParser::bloque()}.
	 *
	 * @param Context\ReglaBloqueStmtContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaBloqueStmt(Context\ReglaBloqueStmtContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentVar` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentVarContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentVar(Context\ReglaSentVarContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentVarCorta` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentVarCortaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentVarCorta(Context\ReglaSentVarCortaContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentConst` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentConstContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentConst(Context\ReglaSentConstContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentAsign` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentAsignContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentAsign(Context\ReglaSentAsignContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentAsignIndice` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentAsignIndiceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentAsignIndice(Context\ReglaSentAsignIndiceContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentInc` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentIncContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentInc(Context\ReglaSentIncContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentDec` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentDecContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentDec(Context\ReglaSentDecContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentIf` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentIfContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentIf(Context\ReglaSentIfContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentSwitch` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentSwitchContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentSwitch(Context\ReglaSentSwitchContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentFor` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentForContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentFor(Context\ReglaSentForContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentBreak` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentBreakContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentBreak(Context\ReglaSentBreakContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentContinue` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentContinueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentContinue(Context\ReglaSentContinueContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentReturn` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentReturnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentReturn(Context\ReglaSentReturnContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentExpr` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentExpr(Context\ReglaSentExprContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentBloque` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 *
	 * @param Context\ReglaSentBloqueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentBloque(Context\ReglaSentBloqueContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentSimpleVarCorta` labeled alternative
	 * in {@see GolampiParser::sentSimple()}.
	 *
	 * @param Context\ReglaSentSimpleVarCortaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentSimpleVarCorta(Context\ReglaSentSimpleVarCortaContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentSimpleAsign` labeled alternative
	 * in {@see GolampiParser::sentSimple()}.
	 *
	 * @param Context\ReglaSentSimpleAsignContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentSimpleAsign(Context\ReglaSentSimpleAsignContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaSentSimpleExpr` labeled alternative
	 * in {@see GolampiParser::sentSimple()}.
	 *
	 * @param Context\ReglaSentSimpleExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaSentSimpleExpr(Context\ReglaSentSimpleExprContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaOpAsign` labeled alternative
	 * in {@see GolampiParser::opAsign()}.
	 *
	 * @param Context\ReglaOpAsignContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaOpAsign(Context\ReglaOpAsignContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaOpAsignSuma` labeled alternative
	 * in {@see GolampiParser::opAsign()}.
	 *
	 * @param Context\ReglaOpAsignSumaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaOpAsignSuma(Context\ReglaOpAsignSumaContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaOpAsignResta` labeled alternative
	 * in {@see GolampiParser::opAsign()}.
	 *
	 * @param Context\ReglaOpAsignRestaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaOpAsignResta(Context\ReglaOpAsignRestaContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaOpAsignMult` labeled alternative
	 * in {@see GolampiParser::opAsign()}.
	 *
	 * @param Context\ReglaOpAsignMultContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaOpAsignMult(Context\ReglaOpAsignMultContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaOpAsignDiv` labeled alternative
	 * in {@see GolampiParser::opAsign()}.
	 *
	 * @param Context\ReglaOpAsignDivContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaOpAsignDiv(Context\ReglaOpAsignDivContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaClausulaFor` labeled alternative
	 * in {@see GolampiParser::clausulaFor()}.
	 *
	 * @param Context\ReglaClausulaForContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaClausulaFor(Context\ReglaClausulaForContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaClausulaCaso` labeled alternative
	 * in {@see GolampiParser::clausulaCaso()}.
	 *
	 * @param Context\ReglaClausulaCasoContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaClausulaCaso(Context\ReglaClausulaCasoContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaClausulaDefault` labeled alternative
	 * in {@see GolampiParser::clausulaCaso()}.
	 *
	 * @param Context\ReglaClausulaDefaultContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaClausulaDefault(Context\ReglaClausulaDefaultContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaListaExpr` labeled alternative
	 * in {@see GolampiParser::listaExpr()}.
	 *
	 * @param Context\ReglaListaExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaListaExpr(Context\ReglaListaExprContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprDiv` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprDivContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprDiv(Context\ReglaExprDivContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprNot` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprNotContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprNot(Context\ReglaExprNotContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprDesigualdad` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprDesigualdadContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprDesigualdad(Context\ReglaExprDesigualdadContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprAndLogico` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprAndLogicoContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprAndLogico(Context\ReglaExprAndLogicoContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprMenor` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprMenorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprMenor(Context\ReglaExprMenorContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprMult` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprMultContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprMult(Context\ReglaExprMultContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprDesreferencia` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprDesreferenciaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprDesreferencia(Context\ReglaExprDesreferenciaContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprMasUnario` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprMasUnarioContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprMasUnario(Context\ReglaExprMasUnarioContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprIgualdad` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprIgualdadContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprIgualdad(Context\ReglaExprIgualdadContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprSuma` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprSumaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprSuma(Context\ReglaExprSumaContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprMayorIgual` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprMayorIgualContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprMayorIgual(Context\ReglaExprMayorIgualContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprMenorIgual` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprMenorIgualContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprMenorIgual(Context\ReglaExprMenorIgualContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprMod` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprModContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprMod(Context\ReglaExprModContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprMenosUnario` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprMenosUnarioContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprMenosUnario(Context\ReglaExprMenosUnarioContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprOrLogico` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprOrLogicoContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprOrLogico(Context\ReglaExprOrLogicoContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprResta` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprRestaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprResta(Context\ReglaExprRestaContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprPrimario` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprPrimarioContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprPrimario(Context\ReglaExprPrimarioContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprMayor` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprMayorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprMayor(Context\ReglaExprMayorContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaExprDireccion` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 *
	 * @param Context\ReglaExprDireccionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaExprDireccion(Context\ReglaExprDireccionContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaPrimarioMiembro` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 *
	 * @param Context\ReglaPrimarioMiembroContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrimarioMiembro(Context\ReglaPrimarioMiembroContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaPrimarioNil` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 *
	 * @param Context\ReglaPrimarioNilContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrimarioNil(Context\ReglaPrimarioNilContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaPrimarioIndice` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 *
	 * @param Context\ReglaPrimarioIndiceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrimarioIndice(Context\ReglaPrimarioIndiceContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaPrimarioPrintln` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 *
	 * @param Context\ReglaPrimarioPrintlnContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrimarioPrintln(Context\ReglaPrimarioPrintlnContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaPrimarioLen` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 *
	 * @param Context\ReglaPrimarioLenContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrimarioLen(Context\ReglaPrimarioLenContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaPrimarioId` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 *
	 * @param Context\ReglaPrimarioIdContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrimarioId(Context\ReglaPrimarioIdContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaPrimarioParentesis` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 *
	 * @param Context\ReglaPrimarioParentesisContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrimarioParentesis(Context\ReglaPrimarioParentesisContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaPrimarioLiteral` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 *
	 * @param Context\ReglaPrimarioLiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrimarioLiteral(Context\ReglaPrimarioLiteralContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaPrimarioLlamada` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 *
	 * @param Context\ReglaPrimarioLlamadaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrimarioLlamada(Context\ReglaPrimarioLlamadaContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaPrimarioNow` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 *
	 * @param Context\ReglaPrimarioNowContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrimarioNow(Context\ReglaPrimarioNowContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaPrimarioTypeOf` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 *
	 * @param Context\ReglaPrimarioTypeOfContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrimarioTypeOf(Context\ReglaPrimarioTypeOfContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaPrimarioSubstr` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 *
	 * @param Context\ReglaPrimarioSubstrContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaPrimarioSubstr(Context\ReglaPrimarioSubstrContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaArgumentos` labeled alternative
	 * in {@see GolampiParser::argumentos()}.
	 *
	 * @param Context\ReglaArgumentosContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaArgumentos(Context\ReglaArgumentosContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaLiteralEntero` labeled alternative
	 * in {@see GolampiParser::literal()}.
	 *
	 * @param Context\ReglaLiteralEnteroContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaLiteralEntero(Context\ReglaLiteralEnteroContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaLiteralFlotante` labeled alternative
	 * in {@see GolampiParser::literal()}.
	 *
	 * @param Context\ReglaLiteralFlotanteContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaLiteralFlotante(Context\ReglaLiteralFlotanteContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaLiteralCadena` labeled alternative
	 * in {@see GolampiParser::literal()}.
	 *
	 * @param Context\ReglaLiteralCadenaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaLiteralCadena(Context\ReglaLiteralCadenaContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaLiteralRuna` labeled alternative
	 * in {@see GolampiParser::literal()}.
	 *
	 * @param Context\ReglaLiteralRunaContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaLiteralRuna(Context\ReglaLiteralRunaContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaLiteralVerdadero` labeled alternative
	 * in {@see GolampiParser::literal()}.
	 *
	 * @param Context\ReglaLiteralVerdaderoContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaLiteralVerdadero(Context\ReglaLiteralVerdaderoContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaLiteralFalso` labeled alternative
	 * in {@see GolampiParser::literal()}.
	 *
	 * @param Context\ReglaLiteralFalsoContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaLiteralFalso(Context\ReglaLiteralFalsoContext $context);

	/**
	 * Visit a parse tree produced by the `ReglaListaId` labeled alternative
	 * in {@see GolampiParser::listaId()}.
	 *
	 * @param Context\ReglaListaIdContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReglaListaId(Context\ReglaListaIdContext $context);
}