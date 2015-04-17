<?php

namespace Topxia\Service\Course\Dao;

interface CourseDao
{
    const TABLENAME = 'course';

    public function getCourse($id);

    public function getCoursesCount();

    public function findCoursesByIds(array $ids);
    
    public function findCoursesByCourseIds(array $ids, $start, $limit);

    public function findCoursesByTagIdsAndStatus(array $tagIds, $status, $start, $limit);

    public function findCoursesByAnyTagIdsAndStatus(array $tagIds, $status, $orderBy, $start, $limit);

    public function searchCourses($conditions, $orderBy, $start, $limit);

    public function searchCourseCount($conditions);

    public function addCourse($course);

    public function updateCourse($id, $fields);

    public function deleteCourse($id);
    
    public function waveCourse($id,$field,$diff);

    public function clearCourseDiscountPrice($discountId);

    public function analysisCourseDataByTime($startTime,$endTime);

    public function findCoursesCountByLessThanCreatedTime($endTime);

    public function analysisCourseSumByTime($endTime);

    public function findCoursesByLikeTitle($title);

}