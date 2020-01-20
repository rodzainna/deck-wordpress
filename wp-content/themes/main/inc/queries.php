<?php 
/**
 * Custom queries
 */

if (!defined('WPINC')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
}

/**
 * Get related news
 */
function _getRelatedPost(WP_Post $current, $num = 3)
{
    return get_posts([
        "post_type" => $current->post_type,
        "posts_per_page" => (int) $num,
        // "orderby" => "date",
        // "order" => "DESC",
        "exclude" => $current->ID,
    ]);
}

/**
 * Get latest news
 */
function _getDecks($num = 999)
{
    return get_posts([
        "post_type" => "decks",
        "posts_per_page" => (int) $num,
        "orderby" => "date",
        "order" => "DESC",
    ]);
}


/**
 * Get latest active news
 */
// function _getLatestActiveNews($num = 3)
// {
//     $currentYear = (int) date('Y');
//     $activeNews = _countPostsByYear('news', $currentYear);

//     if ($activeNews > 0) {
//         return get_posts([
//             "post_type" => "news",
//             "posts_per_page" => (int) $num,
//             "date_query" => [
//                 "after" => [
//                     "year" => $currentYear
//                 ],
//                 "inclusive" => true,
//             ],
//         ]);
//     }

//     return _getLatestNews($num);
// }

/**
 * Get latest active events
 */
// function _getLatestActiveEvents($num = 3)
// {
//     $currentYear = (int) date('Y');
//     $activeEvents = _countEventPostsByYear($currentYear);
//     $activeEventsNextYear = _countEventPostsByYear($currentYear + 1);

//     if ($activeEvents > 0 || $activeEventsNextYear > 0) {
//         global$wpdb;

//         return $wpdb->get_results($wpdb->prepare(
//             "SELECT * 
//             FROM $wpdb->posts
//             WHERE ID IN (
//                 SELECT post_id as ID
//                 from $wpdb->postmeta
//                 where YEAR(meta_value) > %d
//                 and meta_key = %s
//             ) 
//             AND post_type = %s", 
//             [$currentYear - 1, 'start_date', 'events']
//         ));
//     }

//     return _getEvents($num);
// }

/**
 * Get Event Organizers
 */
// function _getEventOrganizers($num = 9999)
// {
//     return get_posts([
//         'post_type' => 'decks',
//         'posts_per_page' => $num,
//     ]);
// }

/**
 * Get event Types
 */
function _getDeckTypes()
{
    return get_terms([
        'taxonomy' => 'deck_type',
    ]);
}

/**
 * Get Event Classification
 */
// function _getEventClassification()
// {
//     return [
//         [
//             'slug' => 'upcoming',
//             'name' => _ar('Upcoming'),
//         ], [
//             'slug' => 'previous',
//             'name' => _ar('Previous'),
//         ],
//     ];
// }

/**
 * Get event tags
 */
// function _getEventTags()
// {
//     return get_terms([
//         'taxonomy' => 'event_tag',
//     ]);
// }

// function _getPartners($num = 9999)
// {
//     return get_posts([
//         'post_type' => 'partners',
//         'posts_per_page' => $num,
//     ]);
// }

// function _getOpenDataYears()
// {
//     global $wpdb;

//     return $wpdb->get_results($wpdb->prepare(
//         "SELECT meta_value AS val
// 		FROM $wpdb->posts AS a
// 		INNER JOIN $wpdb->postmeta AS b
// 		ON a.ID = b.post_id
// 		WHERE a.post_type = %s
// 		AND b.meta_key = %s
//         AND a.post_status = %s
// 		GROUP BY val 
// 		ORDER BY val DESC",
//         ['open-data', 'year', 'publish']
//     ));
// }

// function _getPublishedYearByPostType($type = 'post')
// {
//     global $wpdb;

//     return $wpdb->get_results($wpdb->prepare(
//         "SELECT YEAR(post_date) as year 
//         FROM $wpdb->posts 
//         WHERE post_type = %s 
//         AND post_status = %s 
//         GROUP BY year 
//         ORDER BY year DESC", 
//         [$type, 'publish']
//     ));
// }

// function _getLatestPublishedYears($type = 'post')
// {
//     $years = _getPublishedYearByPostType($type);

//     return $years[0]->year ?? date('Y');
// }

// function _getPublishedEventYears()
// {
//     global $wpdb;

//     return $wpdb->get_results($wpdb->prepare(
//         "SELECT YEAR(meta_value) as year 
//         FROM $wpdb->postmeta
//         WHERE meta_key = %s 
//         AND post_id IN (
//             SELECT ID as post_id 
//             FROM $wpdb->posts 
//             WHERE post_type = %s
//             AND post_status = %s
//         )
//         GROUP BY year 
//         ORDER BY year DESC", 
//         ['start_date', 'events', 'publish']
//     ));
// }

// function _countPostsByYear($type = 'post', $year)
// {
//     global $wpdb;

//     return (int) $wpdb->get_var($wpdb->prepare(
//         "SELECT count(ID)
//         FROM $wpdb->posts 
//         WHERE post_type = %s 
//         AND post_status = %s 
//         AND YEAR(post_date) = %d", 
//         [$type, 'publish', $year]
//     ));
// }

// function _countEventPostsByYear($year)
// {
//     global $wpdb;

//     return (int) $wpdb->get_var($wpdb->prepare(
//         "SELECT count(post_id)
//         FROM $wpdb->postmeta
//         WHERE meta_key = %s 
//         AND post_id IN (
//             SELECT ID as post_id 
//             FROM $wpdb->posts 
//             WHERE post_type = %s
//             AND post_status = %s
//         )
//         AND YEAR(meta_value) = %d", 
//         ['start_date', 'events', 'publish', $year]
//     ));
// }

// function _getInitiatives($num = 999)
// {
//     return get_posts([
//         "post_type" => "initiatives",
//         "posts_per_page" => $num,
//         "orderby" => "menu_order",
//         "order" => "ASC",
//     ]);
// }

// function _getSliders($num = 999)
// {
//     return get_posts([
//         "post_type" => "sliders",
//         "posts_per_page" => $num,
//     ]);
// }

// function _getApplications($num = 999)
// {
//     return get_posts([
//         "post_type" => "applications",
//         "posts_per_page" => $num,
//     ]);
// }

// function _getMediaKits($num = 999)
// {
//     return get_posts([
//         "post_type" => "media-kit",
//         "posts_per_page" => $num,
//     ]);
// }

// function _getEvents($num = 999)
// {
//     return get_posts([
//         "post_type" => "events",
//         "posts_per_page" => $num,
//     ]);
// }

// function _getLocations($type, $num = 999)
// {
//     return get_posts([
//         "post_type" => "locations",
//         "posts_per_page" => $num,
//         "meta_key" => "type",
//         "meta_value" => $type,
//     ]);
// }

// function _getGalleryItems($num = 999)
// {
//     return get_posts([
//         "post_type" => "gallery",
//         "posts_per_page" => $num,
//     ]);
// }

// function _getServices($num = 999)
// {
//     return get_posts([
//         "post_type" => "services",
//         "posts_per_page" => $num,
//         "orderby" => "menu_order",
//         "order" => "ASC",
//     ]);
// }

// /**
//  * Get latest posts
//  */
// function _getLatestPost($type = 'post', $num = 3)
// {
//     return get_posts([
//         "post_type" => $type,
//         "posts_per_page" => (int) $num,
//     ]);
// }

// function _getServiceCategories()
// {
//     $db = new wpdb(
//         KHADAMATIDB_DB,
//         KHADAMATIDB_PASS,
//         KHADAMATIDB_NAME,
//         KHADAMATIDB_HOST
//     );

//     $data = $db->get_results(
//         "SELECT * 
// 		FROM khadamati_categories 
// 		WHERE approvalAdmin IS NOT NULL
// 		AND approvalAdmin <> ''
// 		AND approverAdmin IS NOT NULL
// 		AND approverAdmin <> ''"
//     );

//     return $data;
// }

// function _getKhadamatiServices()
// {
//     $db = new wpdb(
//         KHADAMATIDB_DB,
//         KHADAMATIDB_PASS,
//         KHADAMATIDB_NAME,
//         KHADAMATIDB_HOST
//     );

//     return $db->get_results(
//         "SELECT * FROM khadamati_services"
//     );
// }

// function _getServiceBySlug($slug)
// {
//     $db = new wpdb(
//         KHADAMATIDB_DB,
//         KHADAMATIDB_PASS,
//         KHADAMATIDB_NAME,
//         KHADAMATIDB_HOST
//     );

//     return $db->get_row($db->prepare(
//         "SELECT * FROM khadamati_services
// 		WHERE slug = %s",
//         [$slug]
//     ));
// }

// function _getServiceCategoryByID($serviceID)
// {
//     $db = new wpdb(
//         KHADAMATIDB_DB,
//         KHADAMATIDB_PASS,
//         KHADAMATIDB_NAME,
//         KHADAMATIDB_HOST
//     );

//     return $db->get_row($db->prepare(
//         "SELECT * FROM khadamati_categories
// 		WHERE mainServiceID = %s",
//         [$serviceID]
//     ));
// }

// function _getServiceCategoriesWithPublishedServices()
// {
//     global $wpdb;

//     $ids = $wpdb->get_results($wpdb->prepare(
//         "SELECT meta_value AS service_id
// 		FROM $wpdb->postmeta
// 		WHERE post_id IN (
// 			SELECT ID 
// 			FROM $wpdb->posts
// 			WHERE post_status = %s
// 			AND post_type = %s
// 		)
// 		AND meta_key = %s",
//         ['publish', 'services', 'category']
//     ));

//     $ids = array_map(function ($val) {
//         return (int) $val->service_id;
//     }, $ids);

//     $idPlaceHolders = array_map(function ($val) {
//         return "%d";
//     }, $ids);
//     $idPlaceHolders = "(" . implode(",", $idPlaceHolders) . ")";

//     $db = new wpdb(
//         KHADAMATIDB_DB,
//         KHADAMATIDB_PASS,
//         KHADAMATIDB_NAME,
//         KHADAMATIDB_HOST
//     );

//     return $db->get_results($db->prepare(
//         "SELECT * FROM khadamati_categories
// 		WHERE mainServiceID IN {$idPlaceHolders}",
//         $ids
//     ));
// }

function _getMetaValuesByPostType($key, $postType)
{
    global $wpdb;

    return $wpdb->get_results($wpdb->prepare(
        "SELECT meta_value 
		FROM $wpdb->postmeta 
		WHERE post_id IN (
			SELECT ID as post_id 
			FROM $wpdb->posts 
			WHERE post_type = %s 
			AND post_status = %s
		)
		AND meta_key = %s",
        [$postType, 'publish', $key,]
    ));
}

// function _getHomePageLastUpdated()
// {
//     global $wpdb;

//     return $wpdb->get_var($wpdb->prepare(
//         "SELECT post_modified 
// 		FROM $wpdb->posts 
// 		WHERE post_type IN (%s, %s, %s, %s)
// 		AND post_status = %s
// 		ORDER BY post_modified DESC",
//         ['slider', 'initiatives', 'news', 'events', 'publish',]
//     ));
// }

// function _getPageStars($pageID)
// {
//     $portalDB = portalDB();

//     return (int) $portalDB->get_var($portalDB->prepare(
//         "SELECT avg(answer)
// 		FROM content_rating
// 		WHERE post_id = %d",
//         [$pageID]
//     ));
// }

// function _getPageStarsCount($pageID)
// {
//     $portalDB = portalDB();

//     return (int) $portalDB->get_var($portalDB->prepare(
//         "SELECT count(*)
//         FROM content_rating
//         WHERE post_id = %d",
//         [$pageID]
//     ));
// }

// function _getPagePositiveFeedbackCount($pageID)
// {
//     $portalDB = portalDB();

//     return (int) $portalDB->get_var($portalDB->prepare(
//         "SELECT count(*)
//         FROM page_feedback
//         WHERE post_id = %d 
//         AND answer = %d",
//         [$pageID, 1]
//     ));
// }

// function _getPageFeedbackCount($pageID)
// {
//     $portalDB = portalDB();

//     return (int) $portalDB->get_var($portalDB->prepare(
//         "SELECT count(*)
//         FROM page_feedback
//         WHERE post_id = %d",
//         [$pageID]
//     ));
// }

// function _getServiceStars($serviceID)
// {
//     $portalDB = portalDB();

//     return (int) $portalDB->get_var($portalDB->prepare(
//         "SELECT avg(stars)
//         FROM service_ratings
//         WHERE service_id = %d",
//         [$serviceID]
//     ));
// }

// function _getServiceStarsCount($serviceID)
// {
//     $portalDB = portalDB();

//     return (int) $portalDB->get_var($portalDB->prepare(
//         "SELECT count(*)
//         FROM service_ratings
//         WHERE service_id = %d",
//         [$serviceID]
//     ));
// }

/**
 * Get consultations
 */
// function _getConsultations($num = 9999)
// {
//     return get_posts([
//         "post_type" => "consultations",
//         "posts_per_page" => (int) $num,
//     ]);
// }

// EOF