<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection code
     * @property Grid\Column|Collection message
     * @property Grid\Column|Collection file
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection group_id
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection key
     * @property Grid\Column|Collection rules
     * @property Grid\Column|Collection desc
     * @property Grid\Column|Collection sort
     * @property Grid\Column|Collection is_open
     * @property Grid\Column|Collection is_required
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection pid
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection line
     * @property Grid\Column|Collection trace
     * @property Grid\Column|Collection method
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection query
     * @property Grid\Column|Collection body
     * @property Grid\Column|Collection cookies
     * @property Grid\Column|Collection headers
     * @property Grid\Column|Collection ip
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection is_enabled
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection extension
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection input
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection uuid
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection member_id
     * @property Grid\Column|Collection order_no
     * @property Grid\Column|Collection coupon_id
     * @property Grid\Column|Collection total_amount
     * @property Grid\Column|Collection freight_amount
     * @property Grid\Column|Collection promotion_amount
     * @property Grid\Column|Collection integration_amount
     * @property Grid\Column|Collection coupon_amount
     * @property Grid\Column|Collection discount_amount
     * @property Grid\Column|Collection amount
     * @property Grid\Column|Collection pay_amount
     * @property Grid\Column|Collection pay_type
     * @property Grid\Column|Collection source_type
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection delivery_company
     * @property Grid\Column|Collection delivery_no
     * @property Grid\Column|Collection integration
     * @property Grid\Column|Collection growth
     * @property Grid\Column|Collection address_name
     * @property Grid\Column|Collection address_phone
     * @property Grid\Column|Collection address_province
     * @property Grid\Column|Collection address_city
     * @property Grid\Column|Collection address_county
     * @property Grid\Column|Collection address_detail
     * @property Grid\Column|Collection note
     * @property Grid\Column|Collection is_confirm
     * @property Grid\Column|Collection use_integration
     * @property Grid\Column|Collection trade_no
     * @property Grid\Column|Collection trans_hash
     * @property Grid\Column|Collection pay_at
     * @property Grid\Column|Collection delivery_at
     * @property Grid\Column|Collection receive_at
     * @property Grid\Column|Collection comment_at
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection order_id
     * @property Grid\Column|Collection phone
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection address
     * @property Grid\Column|Collection bank_name
     * @property Grid\Column|Collection bank_account
     * @property Grid\Column|Collection is_finish
     * @property Grid\Column|Collection sku_id
     * @property Grid\Column|Collection sku_name
     * @property Grid\Column|Collection sku_img
     * @property Grid\Column|Collection sku_price
     * @property Grid\Column|Collection sku_attrs
     * @property Grid\Column|Collection sku_num
     * @property Grid\Column|Collection real_amount
     * @property Grid\Column|Collection give_integration
     * @property Grid\Column|Collection give_growth
     * @property Grid\Column|Collection order_status
     * @property Grid\Column|Collection operate_name
     * @property Grid\Column|Collection channel
     * @property Grid\Column|Collection content
     * @property Grid\Column|Collection return_name
     * @property Grid\Column|Collection return_phone
     * @property Grid\Column|Collection spu_brand
     * @property Grid\Column|Collection reason
     * @property Grid\Column|Collection desc_pics
     * @property Grid\Column|Collection handle_at
     * @property Grid\Column|Collection handle_note
     * @property Grid\Column|Collection handle_by
     * @property Grid\Column|Collection receive_name
     * @property Grid\Column|Collection receive_phone
     * @property Grid\Column|Collection receive_note
     * @property Grid\Column|Collection subject
     * @property Grid\Column|Collection confirm_at
     * @property Grid\Column|Collection callback_content
     * @property Grid\Column|Collection callback_at
     * @property Grid\Column|Collection cat_id
     * @property Grid\Column|Collection values
     * @property Grid\Column|Collection is_many
     * @property Grid\Column|Collection is_search
     * @property Grid\Column|Collection is_show
     * @property Grid\Column|Collection is_release
     * @property Grid\Column|Collection attr_id
     * @property Grid\Column|Collection spu_id
     * @property Grid\Column|Collection attr_name
     * @property Grid\Column|Collection attr_value
     * @property Grid\Column|Collection logo
     * @property Grid\Column|Collection cover
     * @property Grid\Column|Collection level
     * @property Grid\Column|Collection product_unit
     * @property Grid\Column|Collection brand_id
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection ot_price
     * @property Grid\Column|Collection sale_count
     * @property Grid\Column|Collection cost_price
     * @property Grid\Column|Collection review_count
     * @property Grid\Column|Collection bar_code
     * @property Grid\Column|Collection stock
     * @property Grid\Column|Collection banner_images
     * @property Grid\Column|Collection keyword
     * @property Grid\Column|Collection unit_name
     * @property Grid\Column|Collection video
     * @property Grid\Column|Collection postage
     * @property Grid\Column|Collection reply_id
     * @property Grid\Column|Collection star
     * @property Grid\Column|Collection like_count
     * @property Grid\Column|Collection reply_count
     * @property Grid\Column|Collection resources
     * @property Grid\Column|Collection create_by
     * @property Grid\Column|Collection update_by
     * @property Grid\Column|Collection page
     * @property Grid\Column|Collection data
     * @property Grid\Column|Collection platform
     * @property Grid\Column|Collection info
     * @property Grid\Column|Collection url
     * @property Grid\Column|Collection is_force
     * @property Grid\Column|Collection is_new
     * @property Grid\Column|Collection num
     * @property Grid\Column|Collection per_limit
     * @property Grid\Column|Collection min_point
     * @property Grid\Column|Collection start_at
     * @property Grid\Column|Collection end_at
     * @property Grid\Column|Collection use_type
     * @property Grid\Column|Collection publish_count
     * @property Grid\Column|Collection use_count
     * @property Grid\Column|Collection receive_count
     * @property Grid\Column|Collection enable_start_at
     * @property Grid\Column|Collection enable_end_at
     * @property Grid\Column|Collection member_level
     * @property Grid\Column|Collection nickname
     * @property Grid\Column|Collection get_type
     * @property Grid\Column|Collection used_at
     * @property Grid\Column|Collection cat_name
     * @property Grid\Column|Collection spu_name
     * @property Grid\Column|Collection img
     * @property Grid\Column|Collection click_count
     * @property Grid\Column|Collection subtitle
     * @property Grid\Column|Collection subject_id
     * @property Grid\Column|Collection level_id
     * @property Grid\Column|Collection level_name
     * @property Grid\Column|Collection is_super
     * @property Grid\Column|Collection activity_id
     * @property Grid\Column|Collection session_id
     * @property Grid\Column|Collection count
     * @property Grid\Column|Collection limit
     * @property Grid\Column|Collection send_at
     * @property Grid\Column|Collection full_price
     * @property Grid\Column|Collection reduce_price
     * @property Grid\Column|Collection full_count
     * @property Grid\Column|Collection discount
     * @property Grid\Column|Collection grow_bounds
     * @property Grid\Column|Collection buy_bounds
     * @property Grid\Column|Collection work
     * @property Grid\Column|Collection city_id
     * @property Grid\Column|Collection area_code
     * @property Grid\Column|Collection merger_name
     * @property Grid\Column|Collection lng
     * @property Grid\Column|Collection lat
     * @property Grid\Column|Collection snum
     * @property Grid\Column|Collection spu_img
     * @property Grid\Column|Collection subject_name
     * @property Grid\Column|Collection subject_img
     * @property Grid\Column|Collection subject_url
     * @property Grid\Column|Collection change_count
     * @property Grid\Column|Collection gender
     * @property Grid\Column|Collection birth
     * @property Grid\Column|Collection area
     * @property Grid\Column|Collection job
     * @property Grid\Column|Collection sign
     * @property Grid\Column|Collection province
     * @property Grid\Column|Collection city
     * @property Grid\Column|Collection county
     * @property Grid\Column|Collection is_default
     * @property Grid\Column|Collection free_freight
     * @property Grid\Column|Collection comment_growth
     * @property Grid\Column|Collection is_freight
     * @property Grid\Column|Collection is_member
     * @property Grid\Column|Collection is_birthday
     * @property Grid\Column|Collection order_count
     * @property Grid\Column|Collection coupon_count
     * @property Grid\Column|Collection comment_count
     * @property Grid\Column|Collection return_count
     * @property Grid\Column|Collection login_count
     * @property Grid\Column|Collection follow_count
     * @property Grid\Column|Collection fens_count
     * @property Grid\Column|Collection collect_product_count
     * @property Grid\Column|Collection collect_subject_count
     * @property Grid\Column|Collection collect_comment_count
     * @property Grid\Column|Collection invite_count
     * @property Grid\Column|Collection assignee_id
     * @property Grid\Column|Collection assignee_name
     * @property Grid\Column|Collection priority
     * @property Grid\Column|Collection ware_id
     * @property Grid\Column|Collection purchase_id
     * @property Grid\Column|Collection stock_lock
     * @property Grid\Column|Collection consignee
     * @property Grid\Column|Collection remark
     * @property Grid\Column|Collection task_id
     *
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection code(string $label = null)
     * @method Grid\Column|Collection message(string $label = null)
     * @method Grid\Column|Collection file(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection group_id(string $label = null)
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection key(string $label = null)
     * @method Grid\Column|Collection rules(string $label = null)
     * @method Grid\Column|Collection desc(string $label = null)
     * @method Grid\Column|Collection sort(string $label = null)
     * @method Grid\Column|Collection is_open(string $label = null)
     * @method Grid\Column|Collection is_required(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection pid(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection line(string $label = null)
     * @method Grid\Column|Collection trace(string $label = null)
     * @method Grid\Column|Collection method(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection query(string $label = null)
     * @method Grid\Column|Collection body(string $label = null)
     * @method Grid\Column|Collection cookies(string $label = null)
     * @method Grid\Column|Collection headers(string $label = null)
     * @method Grid\Column|Collection ip(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection is_enabled(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection extension(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection input(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection uuid(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection member_id(string $label = null)
     * @method Grid\Column|Collection order_no(string $label = null)
     * @method Grid\Column|Collection coupon_id(string $label = null)
     * @method Grid\Column|Collection total_amount(string $label = null)
     * @method Grid\Column|Collection freight_amount(string $label = null)
     * @method Grid\Column|Collection promotion_amount(string $label = null)
     * @method Grid\Column|Collection integration_amount(string $label = null)
     * @method Grid\Column|Collection coupon_amount(string $label = null)
     * @method Grid\Column|Collection discount_amount(string $label = null)
     * @method Grid\Column|Collection amount(string $label = null)
     * @method Grid\Column|Collection pay_amount(string $label = null)
     * @method Grid\Column|Collection pay_type(string $label = null)
     * @method Grid\Column|Collection source_type(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection delivery_company(string $label = null)
     * @method Grid\Column|Collection delivery_no(string $label = null)
     * @method Grid\Column|Collection integration(string $label = null)
     * @method Grid\Column|Collection growth(string $label = null)
     * @method Grid\Column|Collection address_name(string $label = null)
     * @method Grid\Column|Collection address_phone(string $label = null)
     * @method Grid\Column|Collection address_province(string $label = null)
     * @method Grid\Column|Collection address_city(string $label = null)
     * @method Grid\Column|Collection address_county(string $label = null)
     * @method Grid\Column|Collection address_detail(string $label = null)
     * @method Grid\Column|Collection note(string $label = null)
     * @method Grid\Column|Collection is_confirm(string $label = null)
     * @method Grid\Column|Collection use_integration(string $label = null)
     * @method Grid\Column|Collection trade_no(string $label = null)
     * @method Grid\Column|Collection trans_hash(string $label = null)
     * @method Grid\Column|Collection pay_at(string $label = null)
     * @method Grid\Column|Collection delivery_at(string $label = null)
     * @method Grid\Column|Collection receive_at(string $label = null)
     * @method Grid\Column|Collection comment_at(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection order_id(string $label = null)
     * @method Grid\Column|Collection phone(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection address(string $label = null)
     * @method Grid\Column|Collection bank_name(string $label = null)
     * @method Grid\Column|Collection bank_account(string $label = null)
     * @method Grid\Column|Collection is_finish(string $label = null)
     * @method Grid\Column|Collection sku_id(string $label = null)
     * @method Grid\Column|Collection sku_name(string $label = null)
     * @method Grid\Column|Collection sku_img(string $label = null)
     * @method Grid\Column|Collection sku_price(string $label = null)
     * @method Grid\Column|Collection sku_attrs(string $label = null)
     * @method Grid\Column|Collection sku_num(string $label = null)
     * @method Grid\Column|Collection real_amount(string $label = null)
     * @method Grid\Column|Collection give_integration(string $label = null)
     * @method Grid\Column|Collection give_growth(string $label = null)
     * @method Grid\Column|Collection order_status(string $label = null)
     * @method Grid\Column|Collection operate_name(string $label = null)
     * @method Grid\Column|Collection channel(string $label = null)
     * @method Grid\Column|Collection content(string $label = null)
     * @method Grid\Column|Collection return_name(string $label = null)
     * @method Grid\Column|Collection return_phone(string $label = null)
     * @method Grid\Column|Collection spu_brand(string $label = null)
     * @method Grid\Column|Collection reason(string $label = null)
     * @method Grid\Column|Collection desc_pics(string $label = null)
     * @method Grid\Column|Collection handle_at(string $label = null)
     * @method Grid\Column|Collection handle_note(string $label = null)
     * @method Grid\Column|Collection handle_by(string $label = null)
     * @method Grid\Column|Collection receive_name(string $label = null)
     * @method Grid\Column|Collection receive_phone(string $label = null)
     * @method Grid\Column|Collection receive_note(string $label = null)
     * @method Grid\Column|Collection subject(string $label = null)
     * @method Grid\Column|Collection confirm_at(string $label = null)
     * @method Grid\Column|Collection callback_content(string $label = null)
     * @method Grid\Column|Collection callback_at(string $label = null)
     * @method Grid\Column|Collection cat_id(string $label = null)
     * @method Grid\Column|Collection values(string $label = null)
     * @method Grid\Column|Collection is_many(string $label = null)
     * @method Grid\Column|Collection is_search(string $label = null)
     * @method Grid\Column|Collection is_show(string $label = null)
     * @method Grid\Column|Collection is_release(string $label = null)
     * @method Grid\Column|Collection attr_id(string $label = null)
     * @method Grid\Column|Collection spu_id(string $label = null)
     * @method Grid\Column|Collection attr_name(string $label = null)
     * @method Grid\Column|Collection attr_value(string $label = null)
     * @method Grid\Column|Collection logo(string $label = null)
     * @method Grid\Column|Collection cover(string $label = null)
     * @method Grid\Column|Collection level(string $label = null)
     * @method Grid\Column|Collection product_unit(string $label = null)
     * @method Grid\Column|Collection brand_id(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection ot_price(string $label = null)
     * @method Grid\Column|Collection sale_count(string $label = null)
     * @method Grid\Column|Collection cost_price(string $label = null)
     * @method Grid\Column|Collection review_count(string $label = null)
     * @method Grid\Column|Collection bar_code(string $label = null)
     * @method Grid\Column|Collection stock(string $label = null)
     * @method Grid\Column|Collection banner_images(string $label = null)
     * @method Grid\Column|Collection keyword(string $label = null)
     * @method Grid\Column|Collection unit_name(string $label = null)
     * @method Grid\Column|Collection video(string $label = null)
     * @method Grid\Column|Collection postage(string $label = null)
     * @method Grid\Column|Collection reply_id(string $label = null)
     * @method Grid\Column|Collection star(string $label = null)
     * @method Grid\Column|Collection like_count(string $label = null)
     * @method Grid\Column|Collection reply_count(string $label = null)
     * @method Grid\Column|Collection resources(string $label = null)
     * @method Grid\Column|Collection create_by(string $label = null)
     * @method Grid\Column|Collection update_by(string $label = null)
     * @method Grid\Column|Collection page(string $label = null)
     * @method Grid\Column|Collection data(string $label = null)
     * @method Grid\Column|Collection platform(string $label = null)
     * @method Grid\Column|Collection info(string $label = null)
     * @method Grid\Column|Collection url(string $label = null)
     * @method Grid\Column|Collection is_force(string $label = null)
     * @method Grid\Column|Collection is_new(string $label = null)
     * @method Grid\Column|Collection num(string $label = null)
     * @method Grid\Column|Collection per_limit(string $label = null)
     * @method Grid\Column|Collection min_point(string $label = null)
     * @method Grid\Column|Collection start_at(string $label = null)
     * @method Grid\Column|Collection end_at(string $label = null)
     * @method Grid\Column|Collection use_type(string $label = null)
     * @method Grid\Column|Collection publish_count(string $label = null)
     * @method Grid\Column|Collection use_count(string $label = null)
     * @method Grid\Column|Collection receive_count(string $label = null)
     * @method Grid\Column|Collection enable_start_at(string $label = null)
     * @method Grid\Column|Collection enable_end_at(string $label = null)
     * @method Grid\Column|Collection member_level(string $label = null)
     * @method Grid\Column|Collection nickname(string $label = null)
     * @method Grid\Column|Collection get_type(string $label = null)
     * @method Grid\Column|Collection used_at(string $label = null)
     * @method Grid\Column|Collection cat_name(string $label = null)
     * @method Grid\Column|Collection spu_name(string $label = null)
     * @method Grid\Column|Collection img(string $label = null)
     * @method Grid\Column|Collection click_count(string $label = null)
     * @method Grid\Column|Collection subtitle(string $label = null)
     * @method Grid\Column|Collection subject_id(string $label = null)
     * @method Grid\Column|Collection level_id(string $label = null)
     * @method Grid\Column|Collection level_name(string $label = null)
     * @method Grid\Column|Collection is_super(string $label = null)
     * @method Grid\Column|Collection activity_id(string $label = null)
     * @method Grid\Column|Collection session_id(string $label = null)
     * @method Grid\Column|Collection count(string $label = null)
     * @method Grid\Column|Collection limit(string $label = null)
     * @method Grid\Column|Collection send_at(string $label = null)
     * @method Grid\Column|Collection full_price(string $label = null)
     * @method Grid\Column|Collection reduce_price(string $label = null)
     * @method Grid\Column|Collection full_count(string $label = null)
     * @method Grid\Column|Collection discount(string $label = null)
     * @method Grid\Column|Collection grow_bounds(string $label = null)
     * @method Grid\Column|Collection buy_bounds(string $label = null)
     * @method Grid\Column|Collection work(string $label = null)
     * @method Grid\Column|Collection city_id(string $label = null)
     * @method Grid\Column|Collection area_code(string $label = null)
     * @method Grid\Column|Collection merger_name(string $label = null)
     * @method Grid\Column|Collection lng(string $label = null)
     * @method Grid\Column|Collection lat(string $label = null)
     * @method Grid\Column|Collection snum(string $label = null)
     * @method Grid\Column|Collection spu_img(string $label = null)
     * @method Grid\Column|Collection subject_name(string $label = null)
     * @method Grid\Column|Collection subject_img(string $label = null)
     * @method Grid\Column|Collection subject_url(string $label = null)
     * @method Grid\Column|Collection change_count(string $label = null)
     * @method Grid\Column|Collection gender(string $label = null)
     * @method Grid\Column|Collection birth(string $label = null)
     * @method Grid\Column|Collection area(string $label = null)
     * @method Grid\Column|Collection job(string $label = null)
     * @method Grid\Column|Collection sign(string $label = null)
     * @method Grid\Column|Collection province(string $label = null)
     * @method Grid\Column|Collection city(string $label = null)
     * @method Grid\Column|Collection county(string $label = null)
     * @method Grid\Column|Collection is_default(string $label = null)
     * @method Grid\Column|Collection free_freight(string $label = null)
     * @method Grid\Column|Collection comment_growth(string $label = null)
     * @method Grid\Column|Collection is_freight(string $label = null)
     * @method Grid\Column|Collection is_member(string $label = null)
     * @method Grid\Column|Collection is_birthday(string $label = null)
     * @method Grid\Column|Collection order_count(string $label = null)
     * @method Grid\Column|Collection coupon_count(string $label = null)
     * @method Grid\Column|Collection comment_count(string $label = null)
     * @method Grid\Column|Collection return_count(string $label = null)
     * @method Grid\Column|Collection login_count(string $label = null)
     * @method Grid\Column|Collection follow_count(string $label = null)
     * @method Grid\Column|Collection fens_count(string $label = null)
     * @method Grid\Column|Collection collect_product_count(string $label = null)
     * @method Grid\Column|Collection collect_subject_count(string $label = null)
     * @method Grid\Column|Collection collect_comment_count(string $label = null)
     * @method Grid\Column|Collection invite_count(string $label = null)
     * @method Grid\Column|Collection assignee_id(string $label = null)
     * @method Grid\Column|Collection assignee_name(string $label = null)
     * @method Grid\Column|Collection priority(string $label = null)
     * @method Grid\Column|Collection ware_id(string $label = null)
     * @method Grid\Column|Collection purchase_id(string $label = null)
     * @method Grid\Column|Collection stock_lock(string $label = null)
     * @method Grid\Column|Collection consignee(string $label = null)
     * @method Grid\Column|Collection remark(string $label = null)
     * @method Grid\Column|Collection task_id(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection id
     * @property Show\Field|Collection type
     * @property Show\Field|Collection code
     * @property Show\Field|Collection message
     * @property Show\Field|Collection file
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection group_id
     * @property Show\Field|Collection name
     * @property Show\Field|Collection key
     * @property Show\Field|Collection rules
     * @property Show\Field|Collection desc
     * @property Show\Field|Collection sort
     * @property Show\Field|Collection is_open
     * @property Show\Field|Collection is_required
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection pid
     * @property Show\Field|Collection value
     * @property Show\Field|Collection line
     * @property Show\Field|Collection trace
     * @property Show\Field|Collection method
     * @property Show\Field|Collection path
     * @property Show\Field|Collection query
     * @property Show\Field|Collection body
     * @property Show\Field|Collection cookies
     * @property Show\Field|Collection headers
     * @property Show\Field|Collection ip
     * @property Show\Field|Collection version
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection is_enabled
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection extension
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection input
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection uuid
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection member_id
     * @property Show\Field|Collection order_no
     * @property Show\Field|Collection coupon_id
     * @property Show\Field|Collection total_amount
     * @property Show\Field|Collection freight_amount
     * @property Show\Field|Collection promotion_amount
     * @property Show\Field|Collection integration_amount
     * @property Show\Field|Collection coupon_amount
     * @property Show\Field|Collection discount_amount
     * @property Show\Field|Collection amount
     * @property Show\Field|Collection pay_amount
     * @property Show\Field|Collection pay_type
     * @property Show\Field|Collection source_type
     * @property Show\Field|Collection status
     * @property Show\Field|Collection delivery_company
     * @property Show\Field|Collection delivery_no
     * @property Show\Field|Collection integration
     * @property Show\Field|Collection growth
     * @property Show\Field|Collection address_name
     * @property Show\Field|Collection address_phone
     * @property Show\Field|Collection address_province
     * @property Show\Field|Collection address_city
     * @property Show\Field|Collection address_county
     * @property Show\Field|Collection address_detail
     * @property Show\Field|Collection note
     * @property Show\Field|Collection is_confirm
     * @property Show\Field|Collection use_integration
     * @property Show\Field|Collection trade_no
     * @property Show\Field|Collection trans_hash
     * @property Show\Field|Collection pay_at
     * @property Show\Field|Collection delivery_at
     * @property Show\Field|Collection receive_at
     * @property Show\Field|Collection comment_at
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection order_id
     * @property Show\Field|Collection phone
     * @property Show\Field|Collection email
     * @property Show\Field|Collection address
     * @property Show\Field|Collection bank_name
     * @property Show\Field|Collection bank_account
     * @property Show\Field|Collection is_finish
     * @property Show\Field|Collection sku_id
     * @property Show\Field|Collection sku_name
     * @property Show\Field|Collection sku_img
     * @property Show\Field|Collection sku_price
     * @property Show\Field|Collection sku_attrs
     * @property Show\Field|Collection sku_num
     * @property Show\Field|Collection real_amount
     * @property Show\Field|Collection give_integration
     * @property Show\Field|Collection give_growth
     * @property Show\Field|Collection order_status
     * @property Show\Field|Collection operate_name
     * @property Show\Field|Collection channel
     * @property Show\Field|Collection content
     * @property Show\Field|Collection return_name
     * @property Show\Field|Collection return_phone
     * @property Show\Field|Collection spu_brand
     * @property Show\Field|Collection reason
     * @property Show\Field|Collection desc_pics
     * @property Show\Field|Collection handle_at
     * @property Show\Field|Collection handle_note
     * @property Show\Field|Collection handle_by
     * @property Show\Field|Collection receive_name
     * @property Show\Field|Collection receive_phone
     * @property Show\Field|Collection receive_note
     * @property Show\Field|Collection subject
     * @property Show\Field|Collection confirm_at
     * @property Show\Field|Collection callback_content
     * @property Show\Field|Collection callback_at
     * @property Show\Field|Collection cat_id
     * @property Show\Field|Collection values
     * @property Show\Field|Collection is_many
     * @property Show\Field|Collection is_search
     * @property Show\Field|Collection is_show
     * @property Show\Field|Collection is_release
     * @property Show\Field|Collection attr_id
     * @property Show\Field|Collection spu_id
     * @property Show\Field|Collection attr_name
     * @property Show\Field|Collection attr_value
     * @property Show\Field|Collection logo
     * @property Show\Field|Collection cover
     * @property Show\Field|Collection level
     * @property Show\Field|Collection product_unit
     * @property Show\Field|Collection brand_id
     * @property Show\Field|Collection price
     * @property Show\Field|Collection ot_price
     * @property Show\Field|Collection sale_count
     * @property Show\Field|Collection cost_price
     * @property Show\Field|Collection review_count
     * @property Show\Field|Collection bar_code
     * @property Show\Field|Collection stock
     * @property Show\Field|Collection banner_images
     * @property Show\Field|Collection keyword
     * @property Show\Field|Collection unit_name
     * @property Show\Field|Collection video
     * @property Show\Field|Collection postage
     * @property Show\Field|Collection reply_id
     * @property Show\Field|Collection star
     * @property Show\Field|Collection like_count
     * @property Show\Field|Collection reply_count
     * @property Show\Field|Collection resources
     * @property Show\Field|Collection create_by
     * @property Show\Field|Collection update_by
     * @property Show\Field|Collection page
     * @property Show\Field|Collection data
     * @property Show\Field|Collection platform
     * @property Show\Field|Collection info
     * @property Show\Field|Collection url
     * @property Show\Field|Collection is_force
     * @property Show\Field|Collection is_new
     * @property Show\Field|Collection num
     * @property Show\Field|Collection per_limit
     * @property Show\Field|Collection min_point
     * @property Show\Field|Collection start_at
     * @property Show\Field|Collection end_at
     * @property Show\Field|Collection use_type
     * @property Show\Field|Collection publish_count
     * @property Show\Field|Collection use_count
     * @property Show\Field|Collection receive_count
     * @property Show\Field|Collection enable_start_at
     * @property Show\Field|Collection enable_end_at
     * @property Show\Field|Collection member_level
     * @property Show\Field|Collection nickname
     * @property Show\Field|Collection get_type
     * @property Show\Field|Collection used_at
     * @property Show\Field|Collection cat_name
     * @property Show\Field|Collection spu_name
     * @property Show\Field|Collection img
     * @property Show\Field|Collection click_count
     * @property Show\Field|Collection subtitle
     * @property Show\Field|Collection subject_id
     * @property Show\Field|Collection level_id
     * @property Show\Field|Collection level_name
     * @property Show\Field|Collection is_super
     * @property Show\Field|Collection activity_id
     * @property Show\Field|Collection session_id
     * @property Show\Field|Collection count
     * @property Show\Field|Collection limit
     * @property Show\Field|Collection send_at
     * @property Show\Field|Collection full_price
     * @property Show\Field|Collection reduce_price
     * @property Show\Field|Collection full_count
     * @property Show\Field|Collection discount
     * @property Show\Field|Collection grow_bounds
     * @property Show\Field|Collection buy_bounds
     * @property Show\Field|Collection work
     * @property Show\Field|Collection city_id
     * @property Show\Field|Collection area_code
     * @property Show\Field|Collection merger_name
     * @property Show\Field|Collection lng
     * @property Show\Field|Collection lat
     * @property Show\Field|Collection snum
     * @property Show\Field|Collection spu_img
     * @property Show\Field|Collection subject_name
     * @property Show\Field|Collection subject_img
     * @property Show\Field|Collection subject_url
     * @property Show\Field|Collection change_count
     * @property Show\Field|Collection gender
     * @property Show\Field|Collection birth
     * @property Show\Field|Collection area
     * @property Show\Field|Collection job
     * @property Show\Field|Collection sign
     * @property Show\Field|Collection province
     * @property Show\Field|Collection city
     * @property Show\Field|Collection county
     * @property Show\Field|Collection is_default
     * @property Show\Field|Collection free_freight
     * @property Show\Field|Collection comment_growth
     * @property Show\Field|Collection is_freight
     * @property Show\Field|Collection is_member
     * @property Show\Field|Collection is_birthday
     * @property Show\Field|Collection order_count
     * @property Show\Field|Collection coupon_count
     * @property Show\Field|Collection comment_count
     * @property Show\Field|Collection return_count
     * @property Show\Field|Collection login_count
     * @property Show\Field|Collection follow_count
     * @property Show\Field|Collection fens_count
     * @property Show\Field|Collection collect_product_count
     * @property Show\Field|Collection collect_subject_count
     * @property Show\Field|Collection collect_comment_count
     * @property Show\Field|Collection invite_count
     * @property Show\Field|Collection assignee_id
     * @property Show\Field|Collection assignee_name
     * @property Show\Field|Collection priority
     * @property Show\Field|Collection ware_id
     * @property Show\Field|Collection purchase_id
     * @property Show\Field|Collection stock_lock
     * @property Show\Field|Collection consignee
     * @property Show\Field|Collection remark
     * @property Show\Field|Collection task_id
     *
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection code(string $label = null)
     * @method Show\Field|Collection message(string $label = null)
     * @method Show\Field|Collection file(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection group_id(string $label = null)
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection key(string $label = null)
     * @method Show\Field|Collection rules(string $label = null)
     * @method Show\Field|Collection desc(string $label = null)
     * @method Show\Field|Collection sort(string $label = null)
     * @method Show\Field|Collection is_open(string $label = null)
     * @method Show\Field|Collection is_required(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection pid(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection line(string $label = null)
     * @method Show\Field|Collection trace(string $label = null)
     * @method Show\Field|Collection method(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection query(string $label = null)
     * @method Show\Field|Collection body(string $label = null)
     * @method Show\Field|Collection cookies(string $label = null)
     * @method Show\Field|Collection headers(string $label = null)
     * @method Show\Field|Collection ip(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection is_enabled(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection extension(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection input(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection uuid(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection member_id(string $label = null)
     * @method Show\Field|Collection order_no(string $label = null)
     * @method Show\Field|Collection coupon_id(string $label = null)
     * @method Show\Field|Collection total_amount(string $label = null)
     * @method Show\Field|Collection freight_amount(string $label = null)
     * @method Show\Field|Collection promotion_amount(string $label = null)
     * @method Show\Field|Collection integration_amount(string $label = null)
     * @method Show\Field|Collection coupon_amount(string $label = null)
     * @method Show\Field|Collection discount_amount(string $label = null)
     * @method Show\Field|Collection amount(string $label = null)
     * @method Show\Field|Collection pay_amount(string $label = null)
     * @method Show\Field|Collection pay_type(string $label = null)
     * @method Show\Field|Collection source_type(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection delivery_company(string $label = null)
     * @method Show\Field|Collection delivery_no(string $label = null)
     * @method Show\Field|Collection integration(string $label = null)
     * @method Show\Field|Collection growth(string $label = null)
     * @method Show\Field|Collection address_name(string $label = null)
     * @method Show\Field|Collection address_phone(string $label = null)
     * @method Show\Field|Collection address_province(string $label = null)
     * @method Show\Field|Collection address_city(string $label = null)
     * @method Show\Field|Collection address_county(string $label = null)
     * @method Show\Field|Collection address_detail(string $label = null)
     * @method Show\Field|Collection note(string $label = null)
     * @method Show\Field|Collection is_confirm(string $label = null)
     * @method Show\Field|Collection use_integration(string $label = null)
     * @method Show\Field|Collection trade_no(string $label = null)
     * @method Show\Field|Collection trans_hash(string $label = null)
     * @method Show\Field|Collection pay_at(string $label = null)
     * @method Show\Field|Collection delivery_at(string $label = null)
     * @method Show\Field|Collection receive_at(string $label = null)
     * @method Show\Field|Collection comment_at(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection order_id(string $label = null)
     * @method Show\Field|Collection phone(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection address(string $label = null)
     * @method Show\Field|Collection bank_name(string $label = null)
     * @method Show\Field|Collection bank_account(string $label = null)
     * @method Show\Field|Collection is_finish(string $label = null)
     * @method Show\Field|Collection sku_id(string $label = null)
     * @method Show\Field|Collection sku_name(string $label = null)
     * @method Show\Field|Collection sku_img(string $label = null)
     * @method Show\Field|Collection sku_price(string $label = null)
     * @method Show\Field|Collection sku_attrs(string $label = null)
     * @method Show\Field|Collection sku_num(string $label = null)
     * @method Show\Field|Collection real_amount(string $label = null)
     * @method Show\Field|Collection give_integration(string $label = null)
     * @method Show\Field|Collection give_growth(string $label = null)
     * @method Show\Field|Collection order_status(string $label = null)
     * @method Show\Field|Collection operate_name(string $label = null)
     * @method Show\Field|Collection channel(string $label = null)
     * @method Show\Field|Collection content(string $label = null)
     * @method Show\Field|Collection return_name(string $label = null)
     * @method Show\Field|Collection return_phone(string $label = null)
     * @method Show\Field|Collection spu_brand(string $label = null)
     * @method Show\Field|Collection reason(string $label = null)
     * @method Show\Field|Collection desc_pics(string $label = null)
     * @method Show\Field|Collection handle_at(string $label = null)
     * @method Show\Field|Collection handle_note(string $label = null)
     * @method Show\Field|Collection handle_by(string $label = null)
     * @method Show\Field|Collection receive_name(string $label = null)
     * @method Show\Field|Collection receive_phone(string $label = null)
     * @method Show\Field|Collection receive_note(string $label = null)
     * @method Show\Field|Collection subject(string $label = null)
     * @method Show\Field|Collection confirm_at(string $label = null)
     * @method Show\Field|Collection callback_content(string $label = null)
     * @method Show\Field|Collection callback_at(string $label = null)
     * @method Show\Field|Collection cat_id(string $label = null)
     * @method Show\Field|Collection values(string $label = null)
     * @method Show\Field|Collection is_many(string $label = null)
     * @method Show\Field|Collection is_search(string $label = null)
     * @method Show\Field|Collection is_show(string $label = null)
     * @method Show\Field|Collection is_release(string $label = null)
     * @method Show\Field|Collection attr_id(string $label = null)
     * @method Show\Field|Collection spu_id(string $label = null)
     * @method Show\Field|Collection attr_name(string $label = null)
     * @method Show\Field|Collection attr_value(string $label = null)
     * @method Show\Field|Collection logo(string $label = null)
     * @method Show\Field|Collection cover(string $label = null)
     * @method Show\Field|Collection level(string $label = null)
     * @method Show\Field|Collection product_unit(string $label = null)
     * @method Show\Field|Collection brand_id(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection ot_price(string $label = null)
     * @method Show\Field|Collection sale_count(string $label = null)
     * @method Show\Field|Collection cost_price(string $label = null)
     * @method Show\Field|Collection review_count(string $label = null)
     * @method Show\Field|Collection bar_code(string $label = null)
     * @method Show\Field|Collection stock(string $label = null)
     * @method Show\Field|Collection banner_images(string $label = null)
     * @method Show\Field|Collection keyword(string $label = null)
     * @method Show\Field|Collection unit_name(string $label = null)
     * @method Show\Field|Collection video(string $label = null)
     * @method Show\Field|Collection postage(string $label = null)
     * @method Show\Field|Collection reply_id(string $label = null)
     * @method Show\Field|Collection star(string $label = null)
     * @method Show\Field|Collection like_count(string $label = null)
     * @method Show\Field|Collection reply_count(string $label = null)
     * @method Show\Field|Collection resources(string $label = null)
     * @method Show\Field|Collection create_by(string $label = null)
     * @method Show\Field|Collection update_by(string $label = null)
     * @method Show\Field|Collection page(string $label = null)
     * @method Show\Field|Collection data(string $label = null)
     * @method Show\Field|Collection platform(string $label = null)
     * @method Show\Field|Collection info(string $label = null)
     * @method Show\Field|Collection url(string $label = null)
     * @method Show\Field|Collection is_force(string $label = null)
     * @method Show\Field|Collection is_new(string $label = null)
     * @method Show\Field|Collection num(string $label = null)
     * @method Show\Field|Collection per_limit(string $label = null)
     * @method Show\Field|Collection min_point(string $label = null)
     * @method Show\Field|Collection start_at(string $label = null)
     * @method Show\Field|Collection end_at(string $label = null)
     * @method Show\Field|Collection use_type(string $label = null)
     * @method Show\Field|Collection publish_count(string $label = null)
     * @method Show\Field|Collection use_count(string $label = null)
     * @method Show\Field|Collection receive_count(string $label = null)
     * @method Show\Field|Collection enable_start_at(string $label = null)
     * @method Show\Field|Collection enable_end_at(string $label = null)
     * @method Show\Field|Collection member_level(string $label = null)
     * @method Show\Field|Collection nickname(string $label = null)
     * @method Show\Field|Collection get_type(string $label = null)
     * @method Show\Field|Collection used_at(string $label = null)
     * @method Show\Field|Collection cat_name(string $label = null)
     * @method Show\Field|Collection spu_name(string $label = null)
     * @method Show\Field|Collection img(string $label = null)
     * @method Show\Field|Collection click_count(string $label = null)
     * @method Show\Field|Collection subtitle(string $label = null)
     * @method Show\Field|Collection subject_id(string $label = null)
     * @method Show\Field|Collection level_id(string $label = null)
     * @method Show\Field|Collection level_name(string $label = null)
     * @method Show\Field|Collection is_super(string $label = null)
     * @method Show\Field|Collection activity_id(string $label = null)
     * @method Show\Field|Collection session_id(string $label = null)
     * @method Show\Field|Collection count(string $label = null)
     * @method Show\Field|Collection limit(string $label = null)
     * @method Show\Field|Collection send_at(string $label = null)
     * @method Show\Field|Collection full_price(string $label = null)
     * @method Show\Field|Collection reduce_price(string $label = null)
     * @method Show\Field|Collection full_count(string $label = null)
     * @method Show\Field|Collection discount(string $label = null)
     * @method Show\Field|Collection grow_bounds(string $label = null)
     * @method Show\Field|Collection buy_bounds(string $label = null)
     * @method Show\Field|Collection work(string $label = null)
     * @method Show\Field|Collection city_id(string $label = null)
     * @method Show\Field|Collection area_code(string $label = null)
     * @method Show\Field|Collection merger_name(string $label = null)
     * @method Show\Field|Collection lng(string $label = null)
     * @method Show\Field|Collection lat(string $label = null)
     * @method Show\Field|Collection snum(string $label = null)
     * @method Show\Field|Collection spu_img(string $label = null)
     * @method Show\Field|Collection subject_name(string $label = null)
     * @method Show\Field|Collection subject_img(string $label = null)
     * @method Show\Field|Collection subject_url(string $label = null)
     * @method Show\Field|Collection change_count(string $label = null)
     * @method Show\Field|Collection gender(string $label = null)
     * @method Show\Field|Collection birth(string $label = null)
     * @method Show\Field|Collection area(string $label = null)
     * @method Show\Field|Collection job(string $label = null)
     * @method Show\Field|Collection sign(string $label = null)
     * @method Show\Field|Collection province(string $label = null)
     * @method Show\Field|Collection city(string $label = null)
     * @method Show\Field|Collection county(string $label = null)
     * @method Show\Field|Collection is_default(string $label = null)
     * @method Show\Field|Collection free_freight(string $label = null)
     * @method Show\Field|Collection comment_growth(string $label = null)
     * @method Show\Field|Collection is_freight(string $label = null)
     * @method Show\Field|Collection is_member(string $label = null)
     * @method Show\Field|Collection is_birthday(string $label = null)
     * @method Show\Field|Collection order_count(string $label = null)
     * @method Show\Field|Collection coupon_count(string $label = null)
     * @method Show\Field|Collection comment_count(string $label = null)
     * @method Show\Field|Collection return_count(string $label = null)
     * @method Show\Field|Collection login_count(string $label = null)
     * @method Show\Field|Collection follow_count(string $label = null)
     * @method Show\Field|Collection fens_count(string $label = null)
     * @method Show\Field|Collection collect_product_count(string $label = null)
     * @method Show\Field|Collection collect_subject_count(string $label = null)
     * @method Show\Field|Collection collect_comment_count(string $label = null)
     * @method Show\Field|Collection invite_count(string $label = null)
     * @method Show\Field|Collection assignee_id(string $label = null)
     * @method Show\Field|Collection assignee_name(string $label = null)
     * @method Show\Field|Collection priority(string $label = null)
     * @method Show\Field|Collection ware_id(string $label = null)
     * @method Show\Field|Collection purchase_id(string $label = null)
     * @method Show\Field|Collection stock_lock(string $label = null)
     * @method Show\Field|Collection consignee(string $label = null)
     * @method Show\Field|Collection remark(string $label = null)
     * @method Show\Field|Collection task_id(string $label = null)
     */
    class Show {}

    /**
     * @method \Dcat\Admin\Extension\EasySku\SkuField sku(...$params)
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
