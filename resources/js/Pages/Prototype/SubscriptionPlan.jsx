import Authenticated from "@/Layouts/Authenticated";
import SubscriptionCard from "@/Components/SubscriptionCard";

export default function SubscriptionPlan() {
    return (
        <Authenticated>
            <div className="py-20 flex flex-col items-center">
                <div className="text-black font-semibold text-[26px] mb-3">
                    Pricing for Everyone
                </div>
                <p className="text-base text-gray-1 leading-7 max-w-[302px] text-center">
                    Invest your little money to get a whole new experiences from
                    movies.
                </p>

                {/* Pricing Card */}
                <div className="flex justify-center gap-10 mt-[70px]">
                    {/* Basic */}
                    <SubscriptionCard
                        name="Basic"
                        durationInMonth={3}
                        price={299000}
                        features={["satu", "dua", "tiga"]}
                    />
                    {/* For Greatest */}
                    <SubscriptionCard
                        isPremium
                        name="Premium"
                        durationInMonth={3}
                        price={899000}
                        features={["satu", "dua", "tiga"]}
                    />
                </div>
                {/* /Pricing Card */}
            </div>
        </Authenticated>
    );
}
