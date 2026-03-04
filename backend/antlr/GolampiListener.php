<?php

/*
 * Generated from Golampi.g4 by ANTLR 4.13.1
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see GolampiParser}.
 */
interface GolampiListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by the `ReglaPrograma`
	 * labeled alternative in {@see GolampiParser::programa()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaPrograma(Context\ReglaProgramaContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaPrograma` labeled alternative
	 * in {@see GolampiParser::programa()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaPrograma(Context\ReglaProgramaContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaDeclVar`
	 * labeled alternative in {@see GolampiParser::declaracion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaDeclVar(Context\ReglaDeclVarContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaDeclVar` labeled alternative
	 * in {@see GolampiParser::declaracion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaDeclVar(Context\ReglaDeclVarContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaDeclConst`
	 * labeled alternative in {@see GolampiParser::declaracion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaDeclConst(Context\ReglaDeclConstContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaDeclConst` labeled alternative
	 * in {@see GolampiParser::declaracion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaDeclConst(Context\ReglaDeclConstContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaDeclFunc`
	 * labeled alternative in {@see GolampiParser::declaracion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaDeclFunc(Context\ReglaDeclFuncContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaDeclFunc` labeled alternative
	 * in {@see GolampiParser::declaracion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaDeclFunc(Context\ReglaDeclFuncContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtDeclVar`
	 * labeled alternative in {@see GolampiParser::declVar()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtDeclVar(Context\StmtDeclVarContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtDeclVar` labeled alternative
	 * in {@see GolampiParser::declVar()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtDeclVar(Context\StmtDeclVarContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtDeclVarCorta`
	 * labeled alternative in {@see GolampiParser::declVarCorta()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtDeclVarCorta(Context\StmtDeclVarCortaContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtDeclVarCorta` labeled alternative
	 * in {@see GolampiParser::declVarCorta()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtDeclVarCorta(Context\StmtDeclVarCortaContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtDeclConst`
	 * labeled alternative in {@see GolampiParser::declConst()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtDeclConst(Context\StmtDeclConstContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtDeclConst` labeled alternative
	 * in {@see GolampiParser::declConst()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtDeclConst(Context\StmtDeclConstContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtDeclFunc`
	 * labeled alternative in {@see GolampiParser::declFunc()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtDeclFunc(Context\StmtDeclFuncContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtDeclFunc` labeled alternative
	 * in {@see GolampiParser::declFunc()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtDeclFunc(Context\StmtDeclFuncContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaListaParam`
	 * labeled alternative in {@see GolampiParser::listaParam()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaListaParam(Context\ReglaListaParamContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaListaParam` labeled alternative
	 * in {@see GolampiParser::listaParam()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaListaParam(Context\ReglaListaParamContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaParam`
	 * labeled alternative in {@see GolampiParser::param()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaParam(Context\ReglaParamContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaParam` labeled alternative
	 * in {@see GolampiParser::param()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaParam(Context\ReglaParamContext $context): void;
	/**
	 * Enter a parse tree produced by the `TipoRetornoSimple`
	 * labeled alternative in {@see GolampiParser::tipoRetorno()}.
	 * @param $context The parse tree.
	 */
	public function enterTipoRetornoSimple(Context\TipoRetornoSimpleContext $context): void;
	/**
	 * Exit a parse tree produced by the `TipoRetornoSimple` labeled alternative
	 * in {@see GolampiParser::tipoRetorno()}.
	 * @param $context The parse tree.
	 */
	public function exitTipoRetornoSimple(Context\TipoRetornoSimpleContext $context): void;
	/**
	 * Enter a parse tree produced by the `TipoRetornoMultiple`
	 * labeled alternative in {@see GolampiParser::tipoRetorno()}.
	 * @param $context The parse tree.
	 */
	public function enterTipoRetornoMultiple(Context\TipoRetornoMultipleContext $context): void;
	/**
	 * Exit a parse tree produced by the `TipoRetornoMultiple` labeled alternative
	 * in {@see GolampiParser::tipoRetorno()}.
	 * @param $context The parse tree.
	 */
	public function exitTipoRetornoMultiple(Context\TipoRetornoMultipleContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaListaTipos`
	 * labeled alternative in {@see GolampiParser::listaTipos()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaListaTipos(Context\ReglaListaTiposContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaListaTipos` labeled alternative
	 * in {@see GolampiParser::listaTipos()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaListaTipos(Context\ReglaListaTiposContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaTipoInt32`
	 * labeled alternative in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaTipoInt32(Context\ReglaTipoInt32Context $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaTipoInt32` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaTipoInt32(Context\ReglaTipoInt32Context $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaTipoFloat32`
	 * labeled alternative in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaTipoFloat32(Context\ReglaTipoFloat32Context $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaTipoFloat32` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaTipoFloat32(Context\ReglaTipoFloat32Context $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaTipoBool`
	 * labeled alternative in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaTipoBool(Context\ReglaTipoBoolContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaTipoBool` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaTipoBool(Context\ReglaTipoBoolContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaTipoRune`
	 * labeled alternative in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaTipoRune(Context\ReglaTipoRuneContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaTipoRune` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaTipoRune(Context\ReglaTipoRuneContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaTipoString`
	 * labeled alternative in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaTipoString(Context\ReglaTipoStringContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaTipoString` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaTipoString(Context\ReglaTipoStringContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaTipoArray`
	 * labeled alternative in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaTipoArray(Context\ReglaTipoArrayContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaTipoArray` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaTipoArray(Context\ReglaTipoArrayContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaTipoPuntero`
	 * labeled alternative in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaTipoPuntero(Context\ReglaTipoPunteroContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaTipoPuntero` labeled alternative
	 * in {@see GolampiParser::tipo()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaTipoPuntero(Context\ReglaTipoPunteroContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaTipoArrayExpr`
	 * labeled alternative in {@see GolampiParser::tipoArray()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaTipoArrayExpr(Context\ReglaTipoArrayExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaTipoArrayExpr` labeled alternative
	 * in {@see GolampiParser::tipoArray()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaTipoArrayExpr(Context\ReglaTipoArrayExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaBloqueStmt`
	 * labeled alternative in {@see GolampiParser::bloque()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaBloqueStmt(Context\ReglaBloqueStmtContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaBloqueStmt` labeled alternative
	 * in {@see GolampiParser::bloque()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaBloqueStmt(Context\ReglaBloqueStmtContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentVar`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentVar(Context\ReglaSentVarContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentVar` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentVar(Context\ReglaSentVarContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentVarCorta`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentVarCorta(Context\ReglaSentVarCortaContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentVarCorta` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentVarCorta(Context\ReglaSentVarCortaContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentConst`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentConst(Context\ReglaSentConstContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentConst` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentConst(Context\ReglaSentConstContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentAsign`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentAsign(Context\ReglaSentAsignContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentAsign` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentAsign(Context\ReglaSentAsignContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentIncDec`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentIncDec(Context\ReglaSentIncDecContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentIncDec` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentIncDec(Context\ReglaSentIncDecContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentIf`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentIf(Context\ReglaSentIfContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentIf` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentIf(Context\ReglaSentIfContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentSwitch`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentSwitch(Context\ReglaSentSwitchContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentSwitch` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentSwitch(Context\ReglaSentSwitchContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentFor`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentFor(Context\ReglaSentForContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentFor` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentFor(Context\ReglaSentForContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentBreak`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentBreak(Context\ReglaSentBreakContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentBreak` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentBreak(Context\ReglaSentBreakContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentContinue`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentContinue(Context\ReglaSentContinueContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentContinue` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentContinue(Context\ReglaSentContinueContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentReturn`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentReturn(Context\ReglaSentReturnContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentReturn` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentReturn(Context\ReglaSentReturnContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentExpr`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentExpr(Context\ReglaSentExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentExpr` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentExpr(Context\ReglaSentExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentBloque`
	 * labeled alternative in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentBloque(Context\ReglaSentBloqueContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentBloque` labeled alternative
	 * in {@see GolampiParser::sentencia()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentBloque(Context\ReglaSentBloqueContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtSentAsign`
	 * labeled alternative in {@see GolampiParser::sentAsign()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtSentAsign(Context\StmtSentAsignContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtSentAsign` labeled alternative
	 * in {@see GolampiParser::sentAsign()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtSentAsign(Context\StmtSentAsignContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaOpAsign`
	 * labeled alternative in {@see GolampiParser::opAsign()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaOpAsign(Context\ReglaOpAsignContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaOpAsign` labeled alternative
	 * in {@see GolampiParser::opAsign()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaOpAsign(Context\ReglaOpAsignContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaOpAsignSuma`
	 * labeled alternative in {@see GolampiParser::opAsign()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaOpAsignSuma(Context\ReglaOpAsignSumaContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaOpAsignSuma` labeled alternative
	 * in {@see GolampiParser::opAsign()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaOpAsignSuma(Context\ReglaOpAsignSumaContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaOpAsignResta`
	 * labeled alternative in {@see GolampiParser::opAsign()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaOpAsignResta(Context\ReglaOpAsignRestaContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaOpAsignResta` labeled alternative
	 * in {@see GolampiParser::opAsign()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaOpAsignResta(Context\ReglaOpAsignRestaContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaOpAsignMult`
	 * labeled alternative in {@see GolampiParser::opAsign()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaOpAsignMult(Context\ReglaOpAsignMultContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaOpAsignMult` labeled alternative
	 * in {@see GolampiParser::opAsign()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaOpAsignMult(Context\ReglaOpAsignMultContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaOpAsignDiv`
	 * labeled alternative in {@see GolampiParser::opAsign()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaOpAsignDiv(Context\ReglaOpAsignDivContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaOpAsignDiv` labeled alternative
	 * in {@see GolampiParser::opAsign()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaOpAsignDiv(Context\ReglaOpAsignDivContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtSentInc`
	 * labeled alternative in {@see GolampiParser::sentIncDec()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtSentInc(Context\StmtSentIncContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtSentInc` labeled alternative
	 * in {@see GolampiParser::sentIncDec()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtSentInc(Context\StmtSentIncContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtSentDec`
	 * labeled alternative in {@see GolampiParser::sentIncDec()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtSentDec(Context\StmtSentDecContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtSentDec` labeled alternative
	 * in {@see GolampiParser::sentIncDec()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtSentDec(Context\StmtSentDecContext $context): void;
	/**
	 * Enter a parse tree produced by the `StmtSentIfElse`
	 * labeled alternative in {@see GolampiParser::sentIf()}.
	 * @param $context The parse tree.
	 */
	public function enterStmtSentIfElse(Context\StmtSentIfElseContext $context): void;
	/**
	 * Exit a parse tree produced by the `StmtSentIfElse` labeled alternative
	 * in {@see GolampiParser::sentIf()}.
	 * @param $context The parse tree.
	 */
	public function exitStmtSentIfElse(Context\StmtSentIfElseContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentSimpleVarCorta`
	 * labeled alternative in {@see GolampiParser::sentSimple()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentSimpleVarCorta(Context\ReglaSentSimpleVarCortaContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentSimpleVarCorta` labeled alternative
	 * in {@see GolampiParser::sentSimple()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentSimpleVarCorta(Context\ReglaSentSimpleVarCortaContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentSimpleAsign`
	 * labeled alternative in {@see GolampiParser::sentSimple()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentSimpleAsign(Context\ReglaSentSimpleAsignContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentSimpleAsign` labeled alternative
	 * in {@see GolampiParser::sentSimple()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentSimpleAsign(Context\ReglaSentSimpleAsignContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentSimpleExpr`
	 * labeled alternative in {@see GolampiParser::sentSimple()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentSimpleExpr(Context\ReglaSentSimpleExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentSimpleExpr` labeled alternative
	 * in {@see GolampiParser::sentSimple()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentSimpleExpr(Context\ReglaSentSimpleExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentSwitchCtx`
	 * labeled alternative in {@see GolampiParser::sentSwitch()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentSwitchCtx(Context\ReglaSentSwitchCtxContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentSwitchCtx` labeled alternative
	 * in {@see GolampiParser::sentSwitch()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentSwitchCtx(Context\ReglaSentSwitchCtxContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaClausulaCaso`
	 * labeled alternative in {@see GolampiParser::clausulaCaso()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaClausulaCaso(Context\ReglaClausulaCasoContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaClausulaCaso` labeled alternative
	 * in {@see GolampiParser::clausulaCaso()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaClausulaCaso(Context\ReglaClausulaCasoContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaClausulaDefault`
	 * labeled alternative in {@see GolampiParser::clausulaCaso()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaClausulaDefault(Context\ReglaClausulaDefaultContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaClausulaDefault` labeled alternative
	 * in {@see GolampiParser::clausulaCaso()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaClausulaDefault(Context\ReglaClausulaDefaultContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentForCtx`
	 * labeled alternative in {@see GolampiParser::sentFor()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentForCtx(Context\ReglaSentForCtxContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentForCtx` labeled alternative
	 * in {@see GolampiParser::sentFor()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentForCtx(Context\ReglaSentForCtxContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaClausulaFor`
	 * labeled alternative in {@see GolampiParser::clausulaFor()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaClausulaFor(Context\ReglaClausulaForContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaClausulaFor` labeled alternative
	 * in {@see GolampiParser::clausulaFor()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaClausulaFor(Context\ReglaClausulaForContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentBreakCtx`
	 * labeled alternative in {@see GolampiParser::sentBreak()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentBreakCtx(Context\ReglaSentBreakCtxContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentBreakCtx` labeled alternative
	 * in {@see GolampiParser::sentBreak()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentBreakCtx(Context\ReglaSentBreakCtxContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentContinueCtx`
	 * labeled alternative in {@see GolampiParser::sentContinue()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentContinueCtx(Context\ReglaSentContinueCtxContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentContinueCtx` labeled alternative
	 * in {@see GolampiParser::sentContinue()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentContinueCtx(Context\ReglaSentContinueCtxContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentReturnCtx`
	 * labeled alternative in {@see GolampiParser::sentReturn()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentReturnCtx(Context\ReglaSentReturnCtxContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentReturnCtx` labeled alternative
	 * in {@see GolampiParser::sentReturn()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentReturnCtx(Context\ReglaSentReturnCtxContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaSentExprCtx`
	 * labeled alternative in {@see GolampiParser::sentExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaSentExprCtx(Context\ReglaSentExprCtxContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaSentExprCtx` labeled alternative
	 * in {@see GolampiParser::sentExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaSentExprCtx(Context\ReglaSentExprCtxContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaListaExpr`
	 * labeled alternative in {@see GolampiParser::listaExpr()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaListaExpr(Context\ReglaListaExprContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaListaExpr` labeled alternative
	 * in {@see GolampiParser::listaExpr()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaListaExpr(Context\ReglaListaExprContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprDiv`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprDiv(Context\ReglaExprDivContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprDiv` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprDiv(Context\ReglaExprDivContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprNot`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprNot(Context\ReglaExprNotContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprNot` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprNot(Context\ReglaExprNotContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprDesigualdad`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprDesigualdad(Context\ReglaExprDesigualdadContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprDesigualdad` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprDesigualdad(Context\ReglaExprDesigualdadContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprAndLogico`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprAndLogico(Context\ReglaExprAndLogicoContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprAndLogico` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprAndLogico(Context\ReglaExprAndLogicoContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprMenor`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprMenor(Context\ReglaExprMenorContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprMenor` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprMenor(Context\ReglaExprMenorContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprMult`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprMult(Context\ReglaExprMultContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprMult` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprMult(Context\ReglaExprMultContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprDesreferencia`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprDesreferencia(Context\ReglaExprDesreferenciaContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprDesreferencia` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprDesreferencia(Context\ReglaExprDesreferenciaContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprMasUnario`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprMasUnario(Context\ReglaExprMasUnarioContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprMasUnario` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprMasUnario(Context\ReglaExprMasUnarioContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprIgualdad`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprIgualdad(Context\ReglaExprIgualdadContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprIgualdad` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprIgualdad(Context\ReglaExprIgualdadContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprSuma`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprSuma(Context\ReglaExprSumaContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprSuma` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprSuma(Context\ReglaExprSumaContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprMayorIgual`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprMayorIgual(Context\ReglaExprMayorIgualContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprMayorIgual` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprMayorIgual(Context\ReglaExprMayorIgualContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprMenorIgual`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprMenorIgual(Context\ReglaExprMenorIgualContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprMenorIgual` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprMenorIgual(Context\ReglaExprMenorIgualContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprMod`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprMod(Context\ReglaExprModContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprMod` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprMod(Context\ReglaExprModContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprMenosUnario`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprMenosUnario(Context\ReglaExprMenosUnarioContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprMenosUnario` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprMenosUnario(Context\ReglaExprMenosUnarioContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprOrLogico`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprOrLogico(Context\ReglaExprOrLogicoContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprOrLogico` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprOrLogico(Context\ReglaExprOrLogicoContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprResta`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprResta(Context\ReglaExprRestaContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprResta` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprResta(Context\ReglaExprRestaContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprPrimario`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprPrimario(Context\ReglaExprPrimarioContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprPrimario` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprPrimario(Context\ReglaExprPrimarioContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprMayor`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprMayor(Context\ReglaExprMayorContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprMayor` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprMayor(Context\ReglaExprMayorContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaExprDireccion`
	 * labeled alternative in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaExprDireccion(Context\ReglaExprDireccionContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaExprDireccion` labeled alternative
	 * in {@see GolampiParser::expresion()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaExprDireccion(Context\ReglaExprDireccionContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaPrimarioMiembro`
	 * labeled alternative in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaPrimarioMiembro(Context\ReglaPrimarioMiembroContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaPrimarioMiembro` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaPrimarioMiembro(Context\ReglaPrimarioMiembroContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaPrimarioNil`
	 * labeled alternative in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaPrimarioNil(Context\ReglaPrimarioNilContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaPrimarioNil` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaPrimarioNil(Context\ReglaPrimarioNilContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaPrimarioIndice`
	 * labeled alternative in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaPrimarioIndice(Context\ReglaPrimarioIndiceContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaPrimarioIndice` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaPrimarioIndice(Context\ReglaPrimarioIndiceContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaPrimarioId`
	 * labeled alternative in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaPrimarioId(Context\ReglaPrimarioIdContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaPrimarioId` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaPrimarioId(Context\ReglaPrimarioIdContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaPrimarioParentesis`
	 * labeled alternative in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaPrimarioParentesis(Context\ReglaPrimarioParentesisContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaPrimarioParentesis` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaPrimarioParentesis(Context\ReglaPrimarioParentesisContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaPrimarioLiteral`
	 * labeled alternative in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaPrimarioLiteral(Context\ReglaPrimarioLiteralContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaPrimarioLiteral` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaPrimarioLiteral(Context\ReglaPrimarioLiteralContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaPrimarioLlamada`
	 * labeled alternative in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaPrimarioLlamada(Context\ReglaPrimarioLlamadaContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaPrimarioLlamada` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaPrimarioLlamada(Context\ReglaPrimarioLlamadaContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaPrimarioLlamadaBuiltIn`
	 * labeled alternative in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaPrimarioLlamadaBuiltIn(Context\ReglaPrimarioLlamadaBuiltInContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaPrimarioLlamadaBuiltIn` labeled alternative
	 * in {@see GolampiParser::primario()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaPrimarioLlamadaBuiltIn(Context\ReglaPrimarioLlamadaBuiltInContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaLlamadaPrintln`
	 * labeled alternative in {@see GolampiParser::llamadaBuiltIn()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaLlamadaPrintln(Context\ReglaLlamadaPrintlnContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaLlamadaPrintln` labeled alternative
	 * in {@see GolampiParser::llamadaBuiltIn()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaLlamadaPrintln(Context\ReglaLlamadaPrintlnContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaLlamadaLen`
	 * labeled alternative in {@see GolampiParser::llamadaBuiltIn()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaLlamadaLen(Context\ReglaLlamadaLenContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaLlamadaLen` labeled alternative
	 * in {@see GolampiParser::llamadaBuiltIn()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaLlamadaLen(Context\ReglaLlamadaLenContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaLlamadaNow`
	 * labeled alternative in {@see GolampiParser::llamadaBuiltIn()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaLlamadaNow(Context\ReglaLlamadaNowContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaLlamadaNow` labeled alternative
	 * in {@see GolampiParser::llamadaBuiltIn()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaLlamadaNow(Context\ReglaLlamadaNowContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaLlamadaSubstr`
	 * labeled alternative in {@see GolampiParser::llamadaBuiltIn()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaLlamadaSubstr(Context\ReglaLlamadaSubstrContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaLlamadaSubstr` labeled alternative
	 * in {@see GolampiParser::llamadaBuiltIn()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaLlamadaSubstr(Context\ReglaLlamadaSubstrContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaLlamadaTypeOf`
	 * labeled alternative in {@see GolampiParser::llamadaBuiltIn()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaLlamadaTypeOf(Context\ReglaLlamadaTypeOfContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaLlamadaTypeOf` labeled alternative
	 * in {@see GolampiParser::llamadaBuiltIn()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaLlamadaTypeOf(Context\ReglaLlamadaTypeOfContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaArgumentos`
	 * labeled alternative in {@see GolampiParser::argumentos()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaArgumentos(Context\ReglaArgumentosContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaArgumentos` labeled alternative
	 * in {@see GolampiParser::argumentos()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaArgumentos(Context\ReglaArgumentosContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaLiteralEntero`
	 * labeled alternative in {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaLiteralEntero(Context\ReglaLiteralEnteroContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaLiteralEntero` labeled alternative
	 * in {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaLiteralEntero(Context\ReglaLiteralEnteroContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaLiteralFlotante`
	 * labeled alternative in {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaLiteralFlotante(Context\ReglaLiteralFlotanteContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaLiteralFlotante` labeled alternative
	 * in {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaLiteralFlotante(Context\ReglaLiteralFlotanteContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaLiteralCadena`
	 * labeled alternative in {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaLiteralCadena(Context\ReglaLiteralCadenaContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaLiteralCadena` labeled alternative
	 * in {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaLiteralCadena(Context\ReglaLiteralCadenaContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaLiteralRuna`
	 * labeled alternative in {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaLiteralRuna(Context\ReglaLiteralRunaContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaLiteralRuna` labeled alternative
	 * in {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaLiteralRuna(Context\ReglaLiteralRunaContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaLiteralVerdadero`
	 * labeled alternative in {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaLiteralVerdadero(Context\ReglaLiteralVerdaderoContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaLiteralVerdadero` labeled alternative
	 * in {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaLiteralVerdadero(Context\ReglaLiteralVerdaderoContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaLiteralFalso`
	 * labeled alternative in {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaLiteralFalso(Context\ReglaLiteralFalsoContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaLiteralFalso` labeled alternative
	 * in {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaLiteralFalso(Context\ReglaLiteralFalsoContext $context): void;
	/**
	 * Enter a parse tree produced by the `ReglaListaId`
	 * labeled alternative in {@see GolampiParser::listaId()}.
	 * @param $context The parse tree.
	 */
	public function enterReglaListaId(Context\ReglaListaIdContext $context): void;
	/**
	 * Exit a parse tree produced by the `ReglaListaId` labeled alternative
	 * in {@see GolampiParser::listaId()}.
	 * @param $context The parse tree.
	 */
	public function exitReglaListaId(Context\ReglaListaIdContext $context): void;
}