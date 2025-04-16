-- Add missing columns to clients table
ALTER TABLE clients
ADD COLUMN IF NOT EXISTS role VARCHAR(50) DEFAULT NULL,
ADD COLUMN IF NOT EXISTS experience VARCHAR(50) DEFAULT NULL,
ADD COLUMN IF NOT EXISTS phone VARCHAR(15) DEFAULT NULL,
ADD COLUMN IF NOT EXISTS approval_status VARCHAR(20) DEFAULT 'pending',
ADD COLUMN IF NOT EXISTS approved_by INT DEFAULT NULL,
ADD COLUMN IF NOT EXISTS rejected_by INT DEFAULT NULL,
ADD COLUMN IF NOT EXISTS rejected_at DATETIME DEFAULT NULL,
MODIFY COLUMN followers VARCHAR(50) DEFAULT NULL,
MODIFY COLUMN experience VARCHAR(50) DEFAULT NULL;

-- Add resume_url column to clients table if it doesn't exist
ALTER TABLE clients ADD COLUMN IF NOT EXISTS resume_url VARCHAR(255) DEFAULT NULL;

-- If your MySQL version doesn't support IF NOT EXISTS for ADD COLUMN, use this instead:
-- First check if the column exists
-- SET @exists = 0;
-- SELECT 1 INTO @exists FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'clients' AND column_name = 'resume_url';
-- 
-- -- Add the column if it doesn't exist
-- SET @query = IF(@exists = 0, 'ALTER TABLE clients ADD COLUMN resume_url VARCHAR(255) DEFAULT NULL', 'SELECT "Column already exists"');
-- PREPARE stmt FROM @query;
-- EXECUTE stmt;
-- DEALLOCATE PREPARE stmt; 