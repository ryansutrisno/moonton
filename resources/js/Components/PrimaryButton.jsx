import PropTypes from "prop-types";

const PrimaryButton = ({
    type = "submit",
    className = "",
    disabled,
    variant = "primary",
    children,
}) => {
    return (
        <button
            type={type}
            className={`rounded-2xl py-[13px] text-center w-full ${
                disabled && "opacity-30"
            } btn-${variant} ${className}`}
            disabled={disabled}
        >
            {children}
        </button>
    );
};

PrimaryButton.propTypes = {
    type: PropTypes.oneOf(["button", "submit", "reset"]),
    className: PropTypes.string,
    variant: PropTypes.oneOf([
        "primary",
        "warning",
        "danger",
        "light-outline",
        "white-outline",
    ]),
    disabled: PropTypes.bool,
    children: PropTypes.node,
};

export default PrimaryButton;
