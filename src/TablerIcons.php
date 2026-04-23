<?php

namespace Daljo25\FilamentTablerIcons;

use Daljo25\FilamentTablerIcons\Enums\TablerIcon;
use Filament\Actions\View\ActionsIconAlias;
use Filament\Forms\View\FormsIconAlias;
use Filament\Infolists\View\InfolistsIconAlias;
use Filament\Notifications\View\NotificationsIconAlias;
use Filament\Schemas\View\SchemaIconAlias;
use Filament\Support\View\SupportIconAlias;
use Filament\Tables\View\TablesIconAlias;
use Filament\View\PanelsIconAlias;

class TablerIcons
{
    /**
     * Get the icon map for Filament panels, notifications, and widgets
     */
    public static function getIconMap(): array
    {
        return [
            // Panels icon aliases
        PanelsIconAlias::GLOBAL_SEARCH_FIELD => TablerIcon::Search,
        PanelsIconAlias::PAGES_DASHBOARD_ACTIONS_FILTER => TablerIcon::Filter,
        PanelsIconAlias::PAGES_DASHBOARD_NAVIGATION_ITEM => TablerIcon::Home,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN => TablerIcon::Login,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN_RTL => TablerIcon::Login,
        PanelsIconAlias::RESOURCES_PAGES_EDIT_RECORD_NAVIGATION_ITEM => TablerIcon::Edit,
        PanelsIconAlias::RESOURCES_PAGES_MANAGE_RELATED_RECORDS_NAVIGATION_ITEM => TablerIcon::Settings,
        PanelsIconAlias::RESOURCES_PAGES_VIEW_RECORD_NAVIGATION_ITEM => TablerIcon::Eye,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON => TablerIcon::ChevronLeft,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON_RTL => TablerIcon::ChevronRight,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => TablerIcon::ChevronRight,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON_RTL => TablerIcon::ChevronLeft,
        PanelsIconAlias::SIDEBAR_GROUP_COLLAPSE_BUTTON => TablerIcon::ChevronDown,
        PanelsIconAlias::TENANT_MENU_BILLING_BUTTON => TablerIcon::CreditCard,
        PanelsIconAlias::TENANT_MENU_PROFILE_BUTTON => TablerIcon::User,
        PanelsIconAlias::TENANT_MENU_REGISTRATION_BUTTON => TablerIcon::UserPlus,
        PanelsIconAlias::TENANT_MENU_TOGGLE_BUTTON => TablerIcon::Menu,
        PanelsIconAlias::THEME_SWITCHER_LIGHT_BUTTON => TablerIcon::Sun,
        PanelsIconAlias::THEME_SWITCHER_DARK_BUTTON => TablerIcon::Moon,
        PanelsIconAlias::THEME_SWITCHER_SYSTEM_BUTTON => TablerIcon::DeviceDesktop,
        PanelsIconAlias::TOPBAR_CLOSE_SIDEBAR_BUTTON => TablerIcon::ChevronLeft,
        PanelsIconAlias::TOPBAR_OPEN_SIDEBAR_BUTTON => TablerIcon::ChevronRight,
        PanelsIconAlias::TOPBAR_GROUP_TOGGLE_BUTTON => TablerIcon::Menu,
        PanelsIconAlias::TOPBAR_OPEN_DATABASE_NOTIFICATIONS_BUTTON => TablerIcon::Notification,
        PanelsIconAlias::USER_MENU_PROFILE_ITEM => TablerIcon::UserCircle,
        PanelsIconAlias::USER_MENU_LOGOUT_BUTTON => TablerIcon::Logout,
        PanelsIconAlias::WIDGETS_ACCOUNT_LOGOUT_BUTTON => TablerIcon::Logout,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_DOCUMENTATION_BUTTON => TablerIcon::Book,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_GITHUB_BUTTON => TablerIcon::BrandGithub,

        // Forms icon aliases
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_CLONE => TablerIcon::Copy,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_COLLAPSE => TablerIcon::ChevronDown,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_DELETE => TablerIcon::Trash,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_EXPAND => TablerIcon::ArrowsMaximize,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_DOWN => TablerIcon::ChevronDown,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_UP => TablerIcon::ChevronUp,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_REORDER => TablerIcon::DragDrop,
        FormsIconAlias::COMPONENTS_CHECKBOX_LIST_SEARCH_FIELD => TablerIcon::Search,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_CROP => TablerIcon::Crop,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_MOVE => TablerIcon::DragDrop,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_HORIZONTAL => TablerIcon::FlipHorizontal,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_VERTICAL => TablerIcon::FlipVertical,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_DOWN => TablerIcon::ChevronDown,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_LEFT => TablerIcon::ChevronLeft,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_RIGHT => TablerIcon::ChevronRight,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_UP => TablerIcon::ChevronUp,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_LEFT => TablerIcon::Rotate,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_RIGHT => TablerIcon::RotateClockwise,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_100 => TablerIcon::Zoom,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_IN => TablerIcon::ZoomInArea,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_OUT => TablerIcon::ZoomOutArea,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_DELETE => TablerIcon::Trash,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_REORDER => TablerIcon::DragDrop,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_CLONE => TablerIcon::Copy,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_COLLAPSE => TablerIcon::ChevronDown,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_DELETE => TablerIcon::Trash,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_EXPAND => TablerIcon::ArrowsMaximize,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_DOWN => TablerIcon::ArrowDown,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_UP => TablerIcon::ArrowUp,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_REORDER => TablerIcon::DragDrop,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_CREATE_OPTION => TablerIcon::Plus,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_EDIT_OPTION => TablerIcon::Edit,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_HIDE_PASSWORD => TablerIcon::EyeOff,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_SHOW_PASSWORD => TablerIcon::Eye,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_FALSE => TablerIcon::ToggleLeft,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_TRUE => TablerIcon::ToggleRight,

        // Tables icon aliases
        TablesIconAlias::ACTIONS_COLUMN_MANAGER => TablerIcon::Columns3,
        TablesIconAlias::ACTIONS_DISABLE_REORDERING => TablerIcon::DragDrop,
        TablesIconAlias::ACTIONS_ENABLE_REORDERING => TablerIcon::DragDrop,
        TablesIconAlias::ACTIONS_FILTER => TablerIcon::Filter,
        TablesIconAlias::ACTIONS_GROUP => TablerIcon::List,
        TablesIconAlias::ACTIONS_OPEN_BULK_ACTIONS => TablerIcon::Menu,
        TablesIconAlias::COLUMNS_COLLAPSE_BUTTON => TablerIcon::ArrowDown,
        TablesIconAlias::COLUMNS_ICON_COLUMN_FALSE => TablerIcon::CircleCheck,
        TablesIconAlias::COLUMNS_ICON_COLUMN_TRUE => TablerIcon::CircleCheck,
        TablesIconAlias::EMPTY_STATE => TablerIcon::Inbox,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_BOOLEAN => TablerIcon::ToggleRight,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_DATE => TablerIcon::Calendar,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_NUMBER => TablerIcon::MathFunction,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_RELATIONSHIP => TablerIcon::Link,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_SELECT => TablerIcon::Menu,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_TEXT => TablerIcon::TextSize,
        TablesIconAlias::FILTERS_REMOVE_ALL_BUTTON => TablerIcon::FilterOff,
        TablesIconAlias::GROUPING_COLLAPSE_BUTTON => TablerIcon::ArrowDown,
        TablesIconAlias::HEADER_CELL_SORT_ASC_BUTTON => TablerIcon::ArrowUp,
        TablesIconAlias::HEADER_CELL_SORT_BUTTON => TablerIcon::ArrowsDownUp,
        TablesIconAlias::HEADER_CELL_SORT_DESC_BUTTON => TablerIcon::ArrowDown,
        TablesIconAlias::REORDER_HANDLE => TablerIcon::DragDrop,
        TablesIconAlias::SEARCH_FIELD => TablerIcon::Search,

        // Notifications icon aliases
        NotificationsIconAlias::DATABASE_MODAL_EMPTY_STATE => TablerIcon::Inbox,
        NotificationsIconAlias::NOTIFICATION_CLOSE_BUTTON => TablerIcon::X,
        NotificationsIconAlias::NOTIFICATION_DANGER => TablerIcon::AlertCircle,
        NotificationsIconAlias::NOTIFICATION_INFO => TablerIcon::InfoCircle,
        NotificationsIconAlias::NOTIFICATION_SUCCESS => TablerIcon::CircleCheck,
        NotificationsIconAlias::NOTIFICATION_WARNING => TablerIcon::AlertTriangle,

        // Actions icon aliases
        ActionsIconAlias::ACTION_GROUP => TablerIcon::List,
        ActionsIconAlias::CREATE_ACTION_GROUPED => TablerIcon::Plus,
        ActionsIconAlias::DELETE_ACTION => TablerIcon::Trash,
        ActionsIconAlias::DELETE_ACTION_GROUPED => TablerIcon::Trash,
        ActionsIconAlias::DELETE_ACTION_MODAL => TablerIcon::Trash,
        ActionsIconAlias::DETACH_ACTION => TablerIcon::Unlink,
        ActionsIconAlias::DETACH_ACTION_MODAL => TablerIcon::Unlink,
        ActionsIconAlias::DISSOCIATE_ACTION => TablerIcon::Unlink,
        ActionsIconAlias::DISSOCIATE_ACTION_MODAL => TablerIcon::Unlink,
        ActionsIconAlias::EDIT_ACTION => TablerIcon::Edit,
        ActionsIconAlias::EDIT_ACTION_GROUPED => TablerIcon::Edit,
        ActionsIconAlias::EXPORT_ACTION_GROUPED => TablerIcon::Download,
        ActionsIconAlias::FORCE_DELETE_ACTION => TablerIcon::Trash,
        ActionsIconAlias::FORCE_DELETE_ACTION_GROUPED => TablerIcon::Trash,
        ActionsIconAlias::FORCE_DELETE_ACTION_MODAL => TablerIcon::Trash,
        ActionsIconAlias::IMPORT_ACTION_GROUPED => TablerIcon::Upload,
        ActionsIconAlias::MODAL_CONFIRMATION => TablerIcon::CircleCheck,
        ActionsIconAlias::REPLICATE_ACTION => TablerIcon::Copy,
        ActionsIconAlias::REPLICATE_ACTION_GROUPED => TablerIcon::Copy,
        ActionsIconAlias::RESTORE_ACTION => TablerIcon::TrashX,
        ActionsIconAlias::RESTORE_ACTION_GROUPED => TablerIcon::TrashX,
        ActionsIconAlias::RESTORE_ACTION_MODAL => TablerIcon::TrashX,
        ActionsIconAlias::VIEW_ACTION => TablerIcon::Eye,
        ActionsIconAlias::VIEW_ACTION_GROUPED => TablerIcon::Eye,

        // Infolists icon aliases
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_FALSE => TablerIcon::CircleCheck,
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_TRUE => TablerIcon::CircleCheck,

        // Schema icon aliases
        SchemaIconAlias::COMPONENTS_WIZARD_COMPLETED_STEP => TablerIcon::CircleCheck,

        // Support icon aliases
        SupportIconAlias::BADGE_DELETE_BUTTON => TablerIcon::Trash,
        SupportIconAlias::BREADCRUMBS_SEPARATOR => TablerIcon::ChevronRight,
        SupportIconAlias::BREADCRUMBS_SEPARATOR_RTL => TablerIcon::ChevronLeft,
        SupportIconAlias::MODAL_CLOSE_BUTTON => TablerIcon::X,
        SupportIconAlias::PAGINATION_FIRST_BUTTON => TablerIcon::ChevronsLeft,
        SupportIconAlias::PAGINATION_FIRST_BUTTON_RTL => TablerIcon::ChevronsRight,
        SupportIconAlias::PAGINATION_LAST_BUTTON => TablerIcon::ChevronsRight,
        SupportIconAlias::PAGINATION_LAST_BUTTON_RTL => TablerIcon::ChevronsLeft,
        SupportIconAlias::PAGINATION_NEXT_BUTTON => TablerIcon::ChevronRight,
        SupportIconAlias::PAGINATION_NEXT_BUTTON_RTL => TablerIcon::ChevronLeft,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON => TablerIcon::ChevronLeft,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON_RTL => TablerIcon::ChevronRight,
        SupportIconAlias::SECTION_COLLAPSE_BUTTON => TablerIcon::ChevronDown,
        ];
    }
}
