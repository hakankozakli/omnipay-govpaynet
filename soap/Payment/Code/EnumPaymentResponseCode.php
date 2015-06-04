<?php
namespace Flexcoders\GovPayNet;
/**
 * File for class EnumPaymentResponseCode
 * @package Flexcoders\GovPayNet
 * @subpackage Enumerations
 * @date 2015-06-04
 */
/**
 * This class stands for EnumPaymentResponseCode originally named PaymentResponseCode
 * Documentation : Each payment response will be 'coded' to ease API integration with the GovPayNet payment processor.
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://gpsdemo:L0GwsdUFhj8b7awF4QHc@payments.stg.govpaynow.com/ws-soap/services/payment.wsdl}
 * @package Flexcoders\GovPayNet
 * @subpackage Enumerations
 * @date 2015-06-04
 */
class EnumPaymentResponseCode extends WsdlClass
{
    /**
     * Constant for value 'PAY-0'
     * Meta informations extracted from the WSDL
     * - documentation : Payment complete
     * @return string 'PAY-0'
     */
    const VALUE_PAY_0 = 'PAY-0';
    /**
     * Constant for value 'PAY-100'
     * Meta informations extracted from the WSDL
     * - documentation : Payment gateway unavailable. Please contact GPS support.
     * @return string 'PAY-100'
     */
    const VALUE_PAY_100 = 'PAY-100';
    /**
     * Constant for value 'PAY-101'
     * Meta informations extracted from the WSDL
     * - documentation : Internal server error please contact GPS support.
     * @return string 'PAY-101'
     */
    const VALUE_PAY_101 = 'PAY-101';
    /**
     * Constant for value 'PAY-200'
     * Meta informations extracted from the WSDL
     * - documentation : Payment failed. PLC not found or not configured properly.
     * @return string 'PAY-200'
     */
    const VALUE_PAY_200 = 'PAY-200';
    /**
     * Constant for value 'PAY-220'
     * Meta informations extracted from the WSDL
     * - documentation : Payment failed. Invalid data provided could be, missing required fields, invalid field format, or invalid data.
     * @return string 'PAY-220'
     */
    const VALUE_PAY_220 = 'PAY-220';
    /**
     * Constant for value 'PAY-221'
     * Meta informations extracted from the WSDL
     * - documentation : Unable to find defendant form type for FLDOC validation, fields improperly configured!
     * @return string 'PAY-221'
     */
    const VALUE_PAY_221 = 'PAY-221';
    /**
     * Constant for value 'PAY-222'
     * Meta informations extracted from the WSDL
     * - documentation : Unable to validate FL DOC offender by name.
     * @return string 'PAY-222'
     */
    const VALUE_PAY_222 = 'PAY-222';
    /**
     * Constant for value 'PAY-223'
     * Meta informations extracted from the WSDL
     * - documentation : Unable to find alpha-numbers form type for FLDOC validation, fields improperly configured!
     * @return string 'PAY-223'
     */
    const VALUE_PAY_223 = 'PAY-223';
    /**
     * Constant for value 'PAY-224'
     * Meta informations extracted from the WSDL
     * - documentation : Unable to validate FL DOC offender by number.
     * @return string 'PAY-224'
     */
    const VALUE_PAY_224 = 'PAY-224';
    /**
     * Constant for value 'PAY-225'
     * Meta informations extracted from the WSDL
     * - documentation : FL DOC offender last name and number are invalid.
     * @return string 'PAY-225'
     */
    const VALUE_PAY_225 = 'PAY-225';
    /**
     * Constant for value 'PAY-226'
     * Meta informations extracted from the WSDL
     * - documentation : This transaction will exceed the maximum deposit amount allowed per inmate over a certain period. Deposit limits are protected information and will not be released.
     * @return string 'PAY-226'
     */
    const VALUE_PAY_226 = 'PAY-226';
    /**
     * Constant for value 'PAY-227'
     * Meta informations extracted from the WSDL
     * - documentation : This transaction will exceed the maximum number of deposits allowed per inmate over a certain period. Deposit limits are protected information and will not be released.
     * @return string 'PAY-227'
     */
    const VALUE_PAY_227 = 'PAY-227';
    /**
     * Constant for value 'PAY-228'
     * Meta informations extracted from the WSDL
     * - documentation : Violation - Credit card payments are not accepted on our system for this person.
     * @return string 'PAY-228'
     */
    const VALUE_PAY_228 = 'PAY-228';
    /**
     * Constant for value 'PAY-229'
     * Meta informations extracted from the WSDL
     * - documentation : At least one field is invalid.
     * @return string 'PAY-229'
     */
    const VALUE_PAY_229 = 'PAY-229';
    /**
     * Constant for value 'PAY-230'
     * Meta informations extracted from the WSDL
     * - documentation : Invalid Swanson inmate.
     * @return string 'PAY-230'
     */
    const VALUE_PAY_230 = 'PAY-230';
    /**
     * Constant for value 'PAY-231'
     * Meta informations extracted from the WSDL
     * - documentation : Invalid authorization value.
     * @return string 'PAY-231'
     */
    const VALUE_PAY_231 = 'PAY-231';
    /**
     * Constant for value 'PAY-232'
     * Meta informations extracted from the WSDL
     * - documentation : relationship max length: 255
     * @return string 'PAY-232'
     */
    const VALUE_PAY_232 = 'PAY-232';
    /**
     * Constant for value 'PAY-233'
     * Meta informations extracted from the WSDL
     * - documentation : relationship required
     * @return string 'PAY-233'
     */
    const VALUE_PAY_233 = 'PAY-233';
    /**
     * Constant for value 'PAY-234'
     * Meta informations extracted from the WSDL
     * - documentation : text field max size: 255
     * @return string 'PAY-234'
     */
    const VALUE_PAY_234 = 'PAY-234';
    /**
     * Constant for value 'PAY-235'
     * Meta informations extracted from the WSDL
     * - documentation : text field required
     * @return string 'PAY-235'
     */
    const VALUE_PAY_235 = 'PAY-235';
    /**
     * Constant for value 'PAY-236'
     * Meta informations extracted from the WSDL
     * - documentation : text field min length
     * @return string 'PAY-236'
     */
    const VALUE_PAY_236 = 'PAY-236';
    /**
     * Constant for value 'PAY-237'
     * Meta informations extracted from the WSDL
     * - documentation : text field max length
     * @return string 'PAY-237'
     */
    const VALUE_PAY_237 = 'PAY-237';
    /**
     * Constant for value 'PAY-238'
     * Meta informations extracted from the WSDL
     * - documentation : alphanumeric max size: 255
     * @return string 'PAY-238'
     */
    const VALUE_PAY_238 = 'PAY-238';
    /**
     * Constant for value 'PAY-239'
     * Meta informations extracted from the WSDL
     * - documentation : alphanumeric required
     * @return string 'PAY-239'
     */
    const VALUE_PAY_239 = 'PAY-239';
    /**
     * Constant for value 'PAY-240'
     * Meta informations extracted from the WSDL
     * - documentation : alphanumeric min length
     * @return string 'PAY-240'
     */
    const VALUE_PAY_240 = 'PAY-240';
    /**
     * Constant for value 'PAY-241'
     * Meta informations extracted from the WSDL
     * - documentation : alphanumeric max length
     * @return string 'PAY-241'
     */
    const VALUE_PAY_241 = 'PAY-241';
    /**
     * Constant for value 'PAY-242'
     * Meta informations extracted from the WSDL
     * - documentation : numbers: invalid number format (Not-a-Number)
     * @return string 'PAY-242'
     */
    const VALUE_PAY_242 = 'PAY-242';
    /**
     * Constant for value 'PAY-243'
     * Meta informations extracted from the WSDL
     * - documentation : numbers: max length
     * @return string 'PAY-243'
     */
    const VALUE_PAY_243 = 'PAY-243';
    /**
     * Constant for value 'PAY-244'
     * Meta informations extracted from the WSDL
     * - documentation : numbers: required
     * @return string 'PAY-244'
     */
    const VALUE_PAY_244 = 'PAY-244';
    /**
     * Constant for value 'PAY-245'
     * Meta informations extracted from the WSDL
     * - documentation : numbers min length
     * @return string 'PAY-245'
     */
    const VALUE_PAY_245 = 'PAY-245';
    /**
     * Constant for value 'PAY-246'
     * Meta informations extracted from the WSDL
     * - documentation : numbers max length
     * @return string 'PAY-246'
     */
    const VALUE_PAY_246 = 'PAY-246';
    /**
     * Constant for value 'PAY-247'
     * Meta informations extracted from the WSDL
     * - documentation : text area: max length
     * @return string 'PAY-247'
     */
    const VALUE_PAY_247 = 'PAY-247';
    /**
     * Constant for value 'PAY-248'
     * Meta informations extracted from the WSDL
     * - documentation : text area: required
     * @return string 'PAY-248'
     */
    const VALUE_PAY_248 = 'PAY-248';
    /**
     * Constant for value 'PAY-249'
     * Meta informations extracted from the WSDL
     * - documentation : dropdown: max length
     * @return string 'PAY-249'
     */
    const VALUE_PAY_249 = 'PAY-249';
    /**
     * Constant for value 'PAY-250'
     * Meta informations extracted from the WSDL
     * - documentation : dropdown: required
     * @return string 'PAY-250'
     */
    const VALUE_PAY_250 = 'PAY-250';
    /**
     * Constant for value 'PAY-251'
     * Meta informations extracted from the WSDL
     * - documentation : checkbox: max length
     * @return string 'PAY-251'
     */
    const VALUE_PAY_251 = 'PAY-251';
    /**
     * Constant for value 'PAY-252'
     * Meta informations extracted from the WSDL
     * - documentation : checkbox: required
     * @return string 'PAY-252'
     */
    const VALUE_PAY_252 = 'PAY-252';
    /**
     * Constant for value 'PAY-253'
     * Meta informations extracted from the WSDL
     * - documentation : choice: max length
     * @return string 'PAY-253'
     */
    const VALUE_PAY_253 = 'PAY-253';
    /**
     * Constant for value 'PAY-254'
     * Meta informations extracted from the WSDL
     * - documentation : choice: required
     * @return string 'PAY-254'
     */
    const VALUE_PAY_254 = 'PAY-254';
    /**
     * Constant for value 'PAY-255'
     * Meta informations extracted from the WSDL
     * - documentation : facility: max length
     * @return string 'PAY-255'
     */
    const VALUE_PAY_255 = 'PAY-255';
    /**
     * Constant for value 'PAY-256'
     * Meta informations extracted from the WSDL
     * - documentation : facility: required
     * @return string 'PAY-256'
     */
    const VALUE_PAY_256 = 'PAY-256';
    /**
     * Constant for value 'PAY-257'
     * Meta informations extracted from the WSDL
     * - documentation : prescreen: max length
     * @return string 'PAY-257'
     */
    const VALUE_PAY_257 = 'PAY-257';
    /**
     * Constant for value 'PAY-258'
     * Meta informations extracted from the WSDL
     * - documentation : prescreen: required
     * @return string 'PAY-258'
     */
    const VALUE_PAY_258 = 'PAY-258';
    /**
     * Constant for value 'PAY-259'
     * Meta informations extracted from the WSDL
     * - documentation : prescreen: Answer not YES
     * @return string 'PAY-259'
     */
    const VALUE_PAY_259 = 'PAY-259';
    /**
     * Constant for value 'PAY-260'
     * Meta informations extracted from the WSDL
     * - documentation : price: max length
     * @return string 'PAY-260'
     */
    const VALUE_PAY_260 = 'PAY-260';
    /**
     * Constant for value 'PAY-261'
     * Meta informations extracted from the WSDL
     * - documentation : price: required
     * @return string 'PAY-261'
     */
    const VALUE_PAY_261 = 'PAY-261';
    /**
     * Constant for value 'PAY-262'
     * Meta informations extracted from the WSDL
     * - documentation : phone: area code invalid (Not-a-Number)
     * @return string 'PAY-262'
     */
    const VALUE_PAY_262 = 'PAY-262';
    /**
     * Constant for value 'PAY-263'
     * Meta informations extracted from the WSDL
     * - documentation : phone: area code max length (3)
     * @return string 'PAY-263'
     */
    const VALUE_PAY_263 = 'PAY-263';
    /**
     * Constant for value 'PAY-264'
     * Meta informations extracted from the WSDL
     * - documentation : phone: area code required
     * @return string 'PAY-264'
     */
    const VALUE_PAY_264 = 'PAY-264';
    /**
     * Constant for value 'PAY-265'
     * Meta informations extracted from the WSDL
     * - documentation : phone: number1 invalid (Not-a-Number)
     * @return string 'PAY-265'
     */
    const VALUE_PAY_265 = 'PAY-265';
    /**
     * Constant for value 'PAY-266'
     * Meta informations extracted from the WSDL
     * - documentation : phone: number1 max length (3)
     * @return string 'PAY-266'
     */
    const VALUE_PAY_266 = 'PAY-266';
    /**
     * Constant for value 'PAY-267'
     * Meta informations extracted from the WSDL
     * - documentation : phone: number1 required
     * @return string 'PAY-267'
     */
    const VALUE_PAY_267 = 'PAY-267';
    /**
     * Constant for value 'PAY-268'
     * Meta informations extracted from the WSDL
     * - documentation : phone: number2 invalid (Not-a-Number)
     * @return string 'PAY-268'
     */
    const VALUE_PAY_268 = 'PAY-268';
    /**
     * Constant for value 'PAY-269'
     * Meta informations extracted from the WSDL
     * - documentation : phone: number2 max length (3)
     * @return string 'PAY-269'
     */
    const VALUE_PAY_269 = 'PAY-269';
    /**
     * Constant for value 'PAY-270'
     * Meta informations extracted from the WSDL
     * - documentation : phone: number2 required
     * @return string 'PAY-270'
     */
    const VALUE_PAY_270 = 'PAY-270';
    /**
     * Constant for value 'PAY-271'
     * Meta informations extracted from the WSDL
     * - documentation : date: required
     * @return string 'PAY-271'
     */
    const VALUE_PAY_271 = 'PAY-271';
    /**
     * Constant for value 'PAY-272'
     * Meta informations extracted from the WSDL
     * - documentation : name/defendant: first name max length (45)
     * @return string 'PAY-272'
     */
    const VALUE_PAY_272 = 'PAY-272';
    /**
     * Constant for value 'PAY-273'
     * Meta informations extracted from the WSDL
     * - documentation : name/defendant: first name required
     * @return string 'PAY-273'
     */
    const VALUE_PAY_273 = 'PAY-273';
    /**
     * Constant for value 'PAY-274'
     * Meta informations extracted from the WSDL
     * - documentation : name/defendant: first name special characters
     * @return string 'PAY-274'
     */
    const VALUE_PAY_274 = 'PAY-274';
    /**
     * Constant for value 'PAY-275'
     * Meta informations extracted from the WSDL
     * - documentation : name/defendant: middle name max length (45)
     * @return string 'PAY-275'
     */
    const VALUE_PAY_275 = 'PAY-275';
    /**
     * Constant for value 'PAY-276'
     * Meta informations extracted from the WSDL
     * - documentation : name/defendant: middle name special characters
     * @return string 'PAY-276'
     */
    const VALUE_PAY_276 = 'PAY-276';
    /**
     * Constant for value 'PAY-277'
     * Meta informations extracted from the WSDL
     * - documentation : name/defendant: last name max length (45)
     * @return string 'PAY-277'
     */
    const VALUE_PAY_277 = 'PAY-277';
    /**
     * Constant for value 'PAY-278'
     * Meta informations extracted from the WSDL
     * - documentation : name/defendant: last name required
     * @return string 'PAY-278'
     */
    const VALUE_PAY_278 = 'PAY-278';
    /**
     * Constant for value 'PAY-279'
     * Meta informations extracted from the WSDL
     * - documentation : name/defendant: last name special characters
     * @return string 'PAY-279'
     */
    const VALUE_PAY_279 = 'PAY-279';
    /**
     * Constant for value 'PAY-280'
     * Meta informations extracted from the WSDL
     * - documentation : address: street1 max length (35)
     * @return string 'PAY-280'
     */
    const VALUE_PAY_280 = 'PAY-280';
    /**
     * Constant for value 'PAY-281'
     * Meta informations extracted from the WSDL
     * - documentation : address: street1 required
     * @return string 'PAY-281'
     */
    const VALUE_PAY_281 = 'PAY-281';
    /**
     * Constant for value 'PAY-282'
     * Meta informations extracted from the WSDL
     * - documentation : address: street2 max length (35)
     * @return string 'PAY-282'
     */
    const VALUE_PAY_282 = 'PAY-282';
    /**
     * Constant for value 'PAY-283'
     * Meta informations extracted from the WSDL
     * - documentation : address: city max length (35)
     * @return string 'PAY-283'
     */
    const VALUE_PAY_283 = 'PAY-283';
    /**
     * Constant for value 'PAY-284'
     * Meta informations extracted from the WSDL
     * - documentation : address: city required
     * @return string 'PAY-284'
     */
    const VALUE_PAY_284 = 'PAY-284';
    /**
     * Constant for value 'PAY-285'
     * Meta informations extracted from the WSDL
     * - documentation : address: state required
     * @return string 'PAY-285'
     */
    const VALUE_PAY_285 = 'PAY-285';
    /**
     * Constant for value 'PAY-286'
     * Meta informations extracted from the WSDL
     * - documentation : address: zip max length (10)
     * @return string 'PAY-286'
     */
    const VALUE_PAY_286 = 'PAY-286';
    /**
     * Constant for value 'PAY-287'
     * Meta informations extracted from the WSDL
     * - documentation : address: zip required
     * @return string 'PAY-287'
     */
    const VALUE_PAY_287 = 'PAY-287';
    /**
     * Constant for value 'PAY-288'
     * Meta informations extracted from the WSDL
     * - documentation : Error occurred while attempting to validate inmate information with Westchester Co. DOC.
     * @return string 'PAY-288'
     */
    const VALUE_PAY_288 = 'PAY-288';
    /**
     * Constant for value 'PAY-289'
     * Meta informations extracted from the WSDL
     * - documentation : The JID number entered does not match the JID number on file with the name entered.
     * @return string 'PAY-289'
     */
    const VALUE_PAY_289 = 'PAY-289';
    /**
     * Constant for value 'PAY-290'
     * Meta informations extracted from the WSDL
     * - documentation : The inmate you entered is not currently in the facility.
     * @return string 'PAY-290'
     */
    const VALUE_PAY_290 = 'PAY-290';
    /**
     * Constant for value 'PAY-291'
     * Meta informations extracted from the WSDL
     * - documentation : The first and/or last name of the inmate associated with the JID number entered are not an exact match with first and/or last name entered.
     * @return string 'PAY-291'
     */
    const VALUE_PAY_291 = 'PAY-291';
    /**
     * Constant for value 'PAY-300'
     * Meta informations extracted from the WSDL
     * - documentation : Payment failed. Unable to authorize card.
     * @return string 'PAY-300'
     */
    const VALUE_PAY_300 = 'PAY-300';
    /**
     * Constant for value 'PAY-310'
     * Meta informations extracted from the WSDL
     * - documentation : Payment failed. Could not complete card transaction.
     * @return string 'PAY-310'
     */
    const VALUE_PAY_310 = 'PAY-310';
    /**
     * Constant for value 'PAY-320'
     * Meta informations extracted from the WSDL
     * - documentation : Payment failed. Card number valid but validation code doesn't match.
     * @return string 'PAY-320'
     */
    const VALUE_PAY_320 = 'PAY-320';
    /**
     * Constant for value 'PAY-321'
     * Meta informations extracted from the WSDL
     * - documentation : Payment failed. Card did not pass AVS verification.
     * @return string 'PAY-321'
     */
    const VALUE_PAY_321 = 'PAY-321';
    /**
     * Constant for value 'PAY-330'
     * Meta informations extracted from the WSDL
     * - documentation : Payment failed. Payment method is required for this type of PLC.
     * @return string 'PAY-330'
     */
    const VALUE_PAY_330 = 'PAY-330';
    /**
     * Constant for value 'PAY-331'
     * Meta informations extracted from the WSDL
     * - documentation : Payment failed. Card type is required for this type of PLC.
     * @return string 'PAY-331'
     */
    const VALUE_PAY_331 = 'PAY-331';
    /**
     * Constant for value 'PAY-332'
     * Meta informations extracted from the WSDL
     * - documentation : Payment failed. Card type mismatch.
     * @return string 'PAY-332'
     */
    const VALUE_PAY_332 = 'PAY-332';
    /**
     * Constant for value 'PAY-333'
     * Meta informations extracted from the WSDL
     * - documentation : Payment failed. Invalid bin number.
     * @return string 'PAY-333'
     */
    const VALUE_PAY_333 = 'PAY-333';
    /**
     * Constant for value 'PAY-334'
     * Meta informations extracted from the WSDL
     * - documentation : Payment failed. Payment method does not match.
     * @return string 'PAY-334'
     */
    const VALUE_PAY_334 = 'PAY-334';
    /**
     * Return true if value is allowed
     * @uses EnumPaymentResponseCode::VALUE_PAY_0
     * @uses EnumPaymentResponseCode::VALUE_PAY_100
     * @uses EnumPaymentResponseCode::VALUE_PAY_101
     * @uses EnumPaymentResponseCode::VALUE_PAY_200
     * @uses EnumPaymentResponseCode::VALUE_PAY_220
     * @uses EnumPaymentResponseCode::VALUE_PAY_221
     * @uses EnumPaymentResponseCode::VALUE_PAY_222
     * @uses EnumPaymentResponseCode::VALUE_PAY_223
     * @uses EnumPaymentResponseCode::VALUE_PAY_224
     * @uses EnumPaymentResponseCode::VALUE_PAY_225
     * @uses EnumPaymentResponseCode::VALUE_PAY_226
     * @uses EnumPaymentResponseCode::VALUE_PAY_227
     * @uses EnumPaymentResponseCode::VALUE_PAY_228
     * @uses EnumPaymentResponseCode::VALUE_PAY_229
     * @uses EnumPaymentResponseCode::VALUE_PAY_230
     * @uses EnumPaymentResponseCode::VALUE_PAY_231
     * @uses EnumPaymentResponseCode::VALUE_PAY_232
     * @uses EnumPaymentResponseCode::VALUE_PAY_233
     * @uses EnumPaymentResponseCode::VALUE_PAY_234
     * @uses EnumPaymentResponseCode::VALUE_PAY_235
     * @uses EnumPaymentResponseCode::VALUE_PAY_236
     * @uses EnumPaymentResponseCode::VALUE_PAY_237
     * @uses EnumPaymentResponseCode::VALUE_PAY_238
     * @uses EnumPaymentResponseCode::VALUE_PAY_239
     * @uses EnumPaymentResponseCode::VALUE_PAY_240
     * @uses EnumPaymentResponseCode::VALUE_PAY_241
     * @uses EnumPaymentResponseCode::VALUE_PAY_242
     * @uses EnumPaymentResponseCode::VALUE_PAY_243
     * @uses EnumPaymentResponseCode::VALUE_PAY_244
     * @uses EnumPaymentResponseCode::VALUE_PAY_245
     * @uses EnumPaymentResponseCode::VALUE_PAY_246
     * @uses EnumPaymentResponseCode::VALUE_PAY_247
     * @uses EnumPaymentResponseCode::VALUE_PAY_248
     * @uses EnumPaymentResponseCode::VALUE_PAY_249
     * @uses EnumPaymentResponseCode::VALUE_PAY_250
     * @uses EnumPaymentResponseCode::VALUE_PAY_251
     * @uses EnumPaymentResponseCode::VALUE_PAY_252
     * @uses EnumPaymentResponseCode::VALUE_PAY_253
     * @uses EnumPaymentResponseCode::VALUE_PAY_254
     * @uses EnumPaymentResponseCode::VALUE_PAY_255
     * @uses EnumPaymentResponseCode::VALUE_PAY_256
     * @uses EnumPaymentResponseCode::VALUE_PAY_257
     * @uses EnumPaymentResponseCode::VALUE_PAY_258
     * @uses EnumPaymentResponseCode::VALUE_PAY_259
     * @uses EnumPaymentResponseCode::VALUE_PAY_260
     * @uses EnumPaymentResponseCode::VALUE_PAY_261
     * @uses EnumPaymentResponseCode::VALUE_PAY_262
     * @uses EnumPaymentResponseCode::VALUE_PAY_263
     * @uses EnumPaymentResponseCode::VALUE_PAY_264
     * @uses EnumPaymentResponseCode::VALUE_PAY_265
     * @uses EnumPaymentResponseCode::VALUE_PAY_266
     * @uses EnumPaymentResponseCode::VALUE_PAY_267
     * @uses EnumPaymentResponseCode::VALUE_PAY_268
     * @uses EnumPaymentResponseCode::VALUE_PAY_269
     * @uses EnumPaymentResponseCode::VALUE_PAY_270
     * @uses EnumPaymentResponseCode::VALUE_PAY_271
     * @uses EnumPaymentResponseCode::VALUE_PAY_272
     * @uses EnumPaymentResponseCode::VALUE_PAY_273
     * @uses EnumPaymentResponseCode::VALUE_PAY_274
     * @uses EnumPaymentResponseCode::VALUE_PAY_275
     * @uses EnumPaymentResponseCode::VALUE_PAY_276
     * @uses EnumPaymentResponseCode::VALUE_PAY_277
     * @uses EnumPaymentResponseCode::VALUE_PAY_278
     * @uses EnumPaymentResponseCode::VALUE_PAY_279
     * @uses EnumPaymentResponseCode::VALUE_PAY_280
     * @uses EnumPaymentResponseCode::VALUE_PAY_281
     * @uses EnumPaymentResponseCode::VALUE_PAY_282
     * @uses EnumPaymentResponseCode::VALUE_PAY_283
     * @uses EnumPaymentResponseCode::VALUE_PAY_284
     * @uses EnumPaymentResponseCode::VALUE_PAY_285
     * @uses EnumPaymentResponseCode::VALUE_PAY_286
     * @uses EnumPaymentResponseCode::VALUE_PAY_287
     * @uses EnumPaymentResponseCode::VALUE_PAY_288
     * @uses EnumPaymentResponseCode::VALUE_PAY_289
     * @uses EnumPaymentResponseCode::VALUE_PAY_290
     * @uses EnumPaymentResponseCode::VALUE_PAY_291
     * @uses EnumPaymentResponseCode::VALUE_PAY_300
     * @uses EnumPaymentResponseCode::VALUE_PAY_310
     * @uses EnumPaymentResponseCode::VALUE_PAY_320
     * @uses EnumPaymentResponseCode::VALUE_PAY_321
     * @uses EnumPaymentResponseCode::VALUE_PAY_330
     * @uses EnumPaymentResponseCode::VALUE_PAY_331
     * @uses EnumPaymentResponseCode::VALUE_PAY_332
     * @uses EnumPaymentResponseCode::VALUE_PAY_333
     * @uses EnumPaymentResponseCode::VALUE_PAY_334
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(EnumPaymentResponseCode::VALUE_PAY_0,EnumPaymentResponseCode::VALUE_PAY_100,EnumPaymentResponseCode::VALUE_PAY_101,EnumPaymentResponseCode::VALUE_PAY_200,EnumPaymentResponseCode::VALUE_PAY_220,EnumPaymentResponseCode::VALUE_PAY_221,EnumPaymentResponseCode::VALUE_PAY_222,EnumPaymentResponseCode::VALUE_PAY_223,EnumPaymentResponseCode::VALUE_PAY_224,EnumPaymentResponseCode::VALUE_PAY_225,EnumPaymentResponseCode::VALUE_PAY_226,EnumPaymentResponseCode::VALUE_PAY_227,EnumPaymentResponseCode::VALUE_PAY_228,EnumPaymentResponseCode::VALUE_PAY_229,EnumPaymentResponseCode::VALUE_PAY_230,EnumPaymentResponseCode::VALUE_PAY_231,EnumPaymentResponseCode::VALUE_PAY_232,EnumPaymentResponseCode::VALUE_PAY_233,EnumPaymentResponseCode::VALUE_PAY_234,EnumPaymentResponseCode::VALUE_PAY_235,EnumPaymentResponseCode::VALUE_PAY_236,EnumPaymentResponseCode::VALUE_PAY_237,EnumPaymentResponseCode::VALUE_PAY_238,EnumPaymentResponseCode::VALUE_PAY_239,EnumPaymentResponseCode::VALUE_PAY_240,EnumPaymentResponseCode::VALUE_PAY_241,EnumPaymentResponseCode::VALUE_PAY_242,EnumPaymentResponseCode::VALUE_PAY_243,EnumPaymentResponseCode::VALUE_PAY_244,EnumPaymentResponseCode::VALUE_PAY_245,EnumPaymentResponseCode::VALUE_PAY_246,EnumPaymentResponseCode::VALUE_PAY_247,EnumPaymentResponseCode::VALUE_PAY_248,EnumPaymentResponseCode::VALUE_PAY_249,EnumPaymentResponseCode::VALUE_PAY_250,EnumPaymentResponseCode::VALUE_PAY_251,EnumPaymentResponseCode::VALUE_PAY_252,EnumPaymentResponseCode::VALUE_PAY_253,EnumPaymentResponseCode::VALUE_PAY_254,EnumPaymentResponseCode::VALUE_PAY_255,EnumPaymentResponseCode::VALUE_PAY_256,EnumPaymentResponseCode::VALUE_PAY_257,EnumPaymentResponseCode::VALUE_PAY_258,EnumPaymentResponseCode::VALUE_PAY_259,EnumPaymentResponseCode::VALUE_PAY_260,EnumPaymentResponseCode::VALUE_PAY_261,EnumPaymentResponseCode::VALUE_PAY_262,EnumPaymentResponseCode::VALUE_PAY_263,EnumPaymentResponseCode::VALUE_PAY_264,EnumPaymentResponseCode::VALUE_PAY_265,EnumPaymentResponseCode::VALUE_PAY_266,EnumPaymentResponseCode::VALUE_PAY_267,EnumPaymentResponseCode::VALUE_PAY_268,EnumPaymentResponseCode::VALUE_PAY_269,EnumPaymentResponseCode::VALUE_PAY_270,EnumPaymentResponseCode::VALUE_PAY_271,EnumPaymentResponseCode::VALUE_PAY_272,EnumPaymentResponseCode::VALUE_PAY_273,EnumPaymentResponseCode::VALUE_PAY_274,EnumPaymentResponseCode::VALUE_PAY_275,EnumPaymentResponseCode::VALUE_PAY_276,EnumPaymentResponseCode::VALUE_PAY_277,EnumPaymentResponseCode::VALUE_PAY_278,EnumPaymentResponseCode::VALUE_PAY_279,EnumPaymentResponseCode::VALUE_PAY_280,EnumPaymentResponseCode::VALUE_PAY_281,EnumPaymentResponseCode::VALUE_PAY_282,EnumPaymentResponseCode::VALUE_PAY_283,EnumPaymentResponseCode::VALUE_PAY_284,EnumPaymentResponseCode::VALUE_PAY_285,EnumPaymentResponseCode::VALUE_PAY_286,EnumPaymentResponseCode::VALUE_PAY_287,EnumPaymentResponseCode::VALUE_PAY_288,EnumPaymentResponseCode::VALUE_PAY_289,EnumPaymentResponseCode::VALUE_PAY_290,EnumPaymentResponseCode::VALUE_PAY_291,EnumPaymentResponseCode::VALUE_PAY_300,EnumPaymentResponseCode::VALUE_PAY_310,EnumPaymentResponseCode::VALUE_PAY_320,EnumPaymentResponseCode::VALUE_PAY_321,EnumPaymentResponseCode::VALUE_PAY_330,EnumPaymentResponseCode::VALUE_PAY_331,EnumPaymentResponseCode::VALUE_PAY_332,EnumPaymentResponseCode::VALUE_PAY_333,EnumPaymentResponseCode::VALUE_PAY_334));
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
