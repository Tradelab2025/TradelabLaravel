import React from "react";
import { motion } from "framer-motion";

interface AnimatedGroupProps {
  children: React.ReactNode;
}

export const AnimatedGroup: React.FC<AnimatedGroupProps> = ({ children }) => {
  return (
    <motion.div
      initial={{ opacity: 0 }}
      animate={{ opacity: 1 }}
      transition={{ duration: 0.5 }}
    >
      {children}
    </motion.div>
  );
};
